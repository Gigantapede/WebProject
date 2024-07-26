<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Comment ça marche ?</title>
  </head>

  <body>
<!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <section>
        <h2>Comment ça marche</h2>
        <ul>
          <li>
            <img src="imgs/recherche.png" alt="Recherche" />
            <h3>Recherchez</h3>
            <p>Trouvez un trajet qui vous convient</p>
          </li>
          <li>
            <img src="imgs/reservation.png" alt="Réserver" />
            <h3>Réservez</h3>
            <p>Réservez votre place en ligne</p>
          </li>
          <li>
            <img src="imgs/partager.png" alt="Partagez" />
            <h3>Partagez</h3>
            <p>Partagez votre trajet avec d'autres utilisateurs</p>
          </li>
        </ul>
    </section>

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



