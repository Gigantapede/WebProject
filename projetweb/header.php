<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page d'accueil </title>
    <link rel="icon" type="image/png" href="imgs/logo_page.png">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </head>

  <body>
    <header>
        <div class="top-nav">
          <a href="index.php"><img src="imgs/logo.png" alt="Logo" class="logo"></a>
          <div id="google_translate_element"></div>
        </div> 
          <nav class="main-nav">
            <ul>
              <li><a href="index.php">Accueil</a></li>
              <?php
                session_start();
                if (isset($_SESSION['id_utilisateur'])) {
                  echo '<li><a href="reservation.php">Réservation</a></li>';
                } else {
                  echo '<li><a href="connexion.php">Réservation</a></li>';
                }
              ?>
              <?php
                if (isset($_SESSION['id_utilisateur'])) {
                  if ($_SESSION['role_user']=="Conducteur"){
                    echo '<li><a href="annonce.php">Mes Annonces</a></li>';
                  }
                }
              ?>
              <li><a href="aPropos.php">A propos</a></li>
              <?php
                if (isset($_SESSION['id_utilisateur'])) {
                  echo '<li><a href="mon_compte.php">Mon Compte</a></li>';
                } else {
                  echo '<li><a href="connexion.php">Connexion</a></li>';
                }
              ?>
            </ul>
          </nav>
      </header>
  
  </body>
  </html>