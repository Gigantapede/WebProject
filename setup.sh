#Installation of dependences

sudo apt -y update && apt upgrade
sudo apt -y install nginx postgresql postgresql-contrib php-fpm php-pgsql #> /dev/null

#Nginx config

sudo mv php.ini /etc/php/7.4/fpm/php.ini
sudo mv website /etc/nginx/sites-available/website
sudo ln -s /etc/nginx/sites-available/website /etc/nginx/sites-enabled
sudo rm /etc/nginx/sites-enabled/default
sudo rm -r /var/www/html
sudo mv config /var/www/

#Move website into /var/www/

sudo mv projetweb /var/www/
sudo chown www-data:www-data /var/www/projetweb/
sudo chown www-data:www-data /var/www/config/

sudo -u postgres psql -c "ALTER USER postgres PASSWORD '123';"
# sudo service postgresql restart

sudo -u postgres createdb web_PRO


sudo -u postgres psql -d web_PRO -a -f drop_and_create_tables.sql
#Start of webserver and database.

sudo service postgresql restart
systemctl restart nginx
