<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informations supplémentaires aux conducteurs</title>
  </head>
  
  <body>
<!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main1">
      <div class="container1">
        <h2>Informations complémentaires au conducteur </h2>
          <div class="imgcontainer">
            <img src="imgs/avatar.png" alt="Avatar" class="avatar">
          </div>

        <form action="login/sign_up_driver.php" method="POST" class="form"> <!-- START -->
          <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <div class="input-container">
            <label for="immatriculation">Numéro d'immatriculation :</label>
            <input type="text" id="immatriculation" name="immatriculation" placeholder="Numéro d'immatriculation"> <!-- required> -->
          </div>
          
          <div class="input-container">
            <label for="modele">Modèle :</label>
            <input type="text" id="modele" name="modele" placeholder="Modèle"> <!-- required> -->
          </div>
          
          <div class="input-container">
            <label for="couleur">Couleur :</label>
            <input type="text" id="couleur" name="couleur" placeholder="Couleur"> <!-- required> -->
          </div>
          
          <div class="input-container">
            <label for="nombre_sieges">Nombre total de sièges du véhicule :</label>
            <input type="number" id="nombre_sieges" name="nombre_sieges" placeholder="Nombre de sièges" min="2" max="10"> <!-- required> -->
          </div>
          
          <button type="submit">Créer un compte</button>
        </form>
      </div>
    </main>

<!-- Inclusion du footer -->
    <footer>
      <?php   include ('footer.php'); ?>
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