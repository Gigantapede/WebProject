<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assistance aux conducteurs</title>

  </head>
  <body>
<!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main2">
     <body>
        <h1>Assistance aux conducteurs</h1>
        <br>
        <h2>Comment proposer un covoiturage ?</h2>
        <p>Pour proposer un covoiturage, vous devez vous inscrire sur notre plateforme en tant que conducteur. Vous pouvez ensuite créer une annonce en indiquant votre ville de départ, votre destination, la date et l'heure de départ, le nombre de sièges disponibles et le prix par passager. </p>
        <h2>Comment gérer les réservations ? </h2>
        <p>Lorsqu'un passager réserve une place dans votre covoiturage, vous recevrez une notification par email. Vous pouvez ensuite confirmer ou refuser la réservation depuis votre compte conducteur.
        <h2>Comment contacter les passagers ? </h2>
        <p>Vous pouvez contacter les passagers avant le départ pour convenir des détails du voyage. Vous trouverez les informations de contact des passagers dans la section réservation de votre compte conducteur.</p>
        </p>
        <h2>Comment modifier/annuler une réservation ?</h2>
         <p>Si vous devez modifier ou annuler une réservation, vous pouvez le faire depuis votre compte conducteur. Nous vous recommandons de contacter le passager concerné pour l'informer des changements.</p>
     </body>   
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