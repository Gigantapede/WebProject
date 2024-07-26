<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assistance aux passagers</title>
  </head>
  <body>
    <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main2">
      <h1>Assistance aux passagers</h1>
      <br>
      <h2>Comment réserver un covoiturage ?</h2>
      <p>Allez sur la page d'accueil de notre site web.</p>
      <p>Entrez votre ville de départ et votre ville d'arrivée ainsi que la date de votre trajet.</p>
      <p>Sélectionnez le covoiturage qui vous convient le mieux et cliquez sur "Réserver".</p>
      <p>Remplissez les informations de votre profil et choisissez le mode de paiement qui vous convient le mieux.</p>
      <p>Une fois que le conducteur aura confirmé votre réservation, vous recevrez un email de confirmation avec tous les détails de votre voyage.</p>
      <br>
      <h2>Comment annuler ou modifier une réservation :</h2>
      <p>Connectez-vous à votre compte et accédez à la section "Mes Réservations".</p>
      <p>Sélectionnez la réservation que vous souhaitez annuler ou modifier.</p>
      <p>Suivez les instructions à l'écran pour annuler ou modifier votre réservation.</p>
      <br>
      <h2>Comment contacter le conducteur en cas de besoin :</h2>
      <p>Connectez-vous à votre compte et accédez à la section "Mes Réservations".</p>
      <p>Sélectionnez la réservation pour laquelle vous souhaitez contacter le conducteur.</p>
      <p>Cliquez sur "Contacter le conducteur" pour lui envoyer un message.</p>
      <br>
      <h2>Que faire en cas de problème pendant le trajet :</h2>
      <p>Contactez immédiatement le conducteur via la messagerie interne pour lui signaler tout problème éventuel.</p>
      <p>Si le problème persiste, contactez notre service clientèle pour obtenir de l'aide supplémentaire.</p>
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