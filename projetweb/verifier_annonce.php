<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vérification de l'annulation d'une annonce </title>
  </head>
  <body>
   <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main6">
          <h2>Êtes vous sûr d'annuler l'annonce 123456 de Paris à Marseille :</h2>
          <table>
           <thead>
            <tr>
              <th>Ville de départ</th>
              <th>Ville d'arrivée</th>
              <th>Date</th>
              <th>Heure</th>
              <th>Sièges disponibles</th>
              <th>ID</th>
              <th>État</th>
            </tr>
           </thead>
           <tbody>
            <tr>
              <td>Paris</td>
              <td>Marseille</td>
              <td>05/01/2023</td>
              <td>14h00</td>
              <td>3</td>
              <td>123456</td>
              <td>En attente</td>
            </tr>
           </tbody>
          </table>
          <div>
            <button onclick="window.location.href='reservation.php'" class="bouton-annuler1">oui</button>
            <button onclick="window.location.href='reservation.php'" class="bouton-annuler2">non</button>
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