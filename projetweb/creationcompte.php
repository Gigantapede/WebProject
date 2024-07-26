<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Création de compte</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  </head>

  <body>
<!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main1">
      <div class="container1">
        <h2>Créer son compte </h2>
        <div class="imgcontainer">
          <img src="imgs/avatar.png" alt="Avatar" class="avatar">
        </div>
        
        <form action="login/sign_up.php" method="POST" class="form" id="createcompte"> <!-- START -->

          <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if(isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="input-container">
            <label for="nom" >Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Nom"> <!-- required> -->
          </div>

          <div class="input-container">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom"> <!-- required> -->
          </div>

          <div class="input-container">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Email"> <!-- required> -->
          </div>

          <div class="input-container">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe"> <!-- required> -->
            <span class="password-icon" onclick="PasswordVisibility()"></span>
          </div>

          <div class="input-container">
            <label for="password">Confirmez le mot de passe :</label>
            <input type="password" id="re_password" name="re_password" placeholder="Confirmez le mot de passe"> <!-- required> -->
            <span class="password-icon" onclick="PasswordVisibility()"></span>
          </div>
          
          <div class="input-container">
            <label for="date_naissance">Date de naissance :</label>
            <input type="date" id="date_naissance" name="date_naissance"> <!-- required> -->
          </div>

          <div class="input-container">
            <label for="checkbox_conducteur">Êtes-vous un conducteur ?</label>
            <input type="checkbox" id="checkbox_conducteur" name="checkbox_conducteur" value="1">
          </div>

          <button type="submit">Créer un compte</button>
        </form>
      </div>
      <p>Déjà un compte ? <a href="connexion.php">Connectez-vous ici</a></p>
    </main>
    
<!-- Inclusion du footer -->
    <footer>
      <?php include ('footer.php'); ?>
    </footer>



<!-- LA partie Javascript -->
<!--traduction des pages -->
    <script>
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
        pageLanguage: 'fr', 
        includedLanguages: 'fr,en,es,ar', 
        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL 
        }, 'google_translate_element');
      }
    </script>
    <script>
      function onLanguageChange() {
        var select = document.getElementById("google_translate_element").querySelector('select');
        select.addEventListener('change', function() {
        googleTranslateElementInit();
        });
      } 
    </script>
  </body>
</html>
