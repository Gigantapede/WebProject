<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Créer une annonce</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
      $(function() {
        var villes = [
          "Paris",
          "Lyon",
          "Marseille",
          "Bordeaux",
          "Nantes",
          "Toulouse",
          "Nice",
          "Strasbourg",
          "Lille",
          "Rennes"
        ];
        $("#arrivee").autocomplete({
          source: villes
        });
        $("#depart").autocomplete({
          source: villes
        });
        $("form.form1").submit(function(e) {
          // empêcher la soumission du formulaire
          e.preventDefault();
          
          var depart = $("#depart").val();
          var arrivee = $("#arrivee").val();
      
          // Vérifier si les 2 villes sont les mêmes
          if (depart === arrivee) {
            // Afficher un message d'erreur 
            $("#error-message").text("Veuillez sélectionner deux villes différentes.");
          } else {
            // Soumettre le formulaire
            this.submit();
          }
        });
      });
    </script>

  </head>

  <body>
<!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main1">
      <div class="container1">
        <div class="logobox">
          <img src="imgs/logo_voiture.png" alt="Logo voiture" >
          <h2>Créer une nouvelle annonce </h2>
          <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if(isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
        </div>
        
        <form action="fill_up_form/fill_form_create_annonce.php" method="POST" class="form">
          <div class="input-container">
            <label for="ville_depart">Ville de départ :</label>
            <input type="text" id="depart" name="depart" placeholder="Ville de départ"> <!-- required> -->
          </div>

          <div class="input-container">
            <label for="ville_arrivee">Ville d'arrivée :</label>
            <input type="text" id="arrivee" name="arrivee" placeholder="Ville d'arrivée"> <!-- required> -->
          </div>

          <div class="input-container">
            <label for="date_depart">Date de départ (mois / jour / année) :</label>
            <input type="date" id="date_depart" name="date_depart"> <!-- required> -->
          </div>

          <div class="input-container">
            <label for="heure_depart">Heure de départ :</label>
            <input type="time" id="heure_depart" name="heure_depart"> <!-- required> -->
          </div>

          <div class="input-container">
            <label for="nb_places">Nombre de places disponibles :</label>
            <input type="number" id="nb_places" name="nb_places" min="1"> <!-- required> -->
          </div>
          <button type="submit">Créer une annonce</button>
        </form>        
        
    </main >
    
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