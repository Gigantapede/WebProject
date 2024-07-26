<?php
    $host_n="localhost";
    $dbname_n="web_PRO";
    $user_n="postgres";
    $password_n="123";

    $connexion=pg_connect("host=$host_n dbname=$dbname_n user=$user_n password=$password_n");
    if(!$connexion)
    {
        echo "Erreur de connexion a la Base de Donnees web_PRO :(";
    }
?>