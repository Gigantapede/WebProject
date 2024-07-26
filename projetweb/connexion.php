<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion</title>
  </head>

  <body>
<!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main1">
        <div class="container1">
          <form action="login/session.php" method="POST">
            <h2>Connexion</h2>

            <div class="imgcontainer">
              <img src="imgs/avatar.png" alt="Avatar" class="avatar">
            </div>

            <?php if(isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <div class="input-container">
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Entrez votre email" name="email"> <!-- required> -->
            </div>
            
            <div class="input-container">
              <label for="password"><b>Mot de passe</b></label>
              <input type="password" placeholder="Entrez votre mot de passe" name="password"> <!-- required> -->
            </div>

            <button type="submit">Se connecter</button>

            <div class="signup-container">
              <p>Vous n'avez pas de compte?</p>
              <a href="creationcompte.php">Créer un compte</a>
            </div>
          </form>
        </div>
    </main>
    

<!-- Inclusion du footer -->
    <footer>
      <?php   include('footer.php'); ?>
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


  