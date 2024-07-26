<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Annuler une réservation</title>
  </head>
  <body>
   <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main7">

        <h1>Entrez l'ID de la réservation à annuler : </h1>
        <div>
          <form action="#" method="POST" class="form_annul">
            <div class="id">
                <label for="id">ID de la réservation :</label>
                <input type="text" id="id" name="id" placeholder="Écrivez l'ID ici" required>
            </div> 
            <div class="submit">   
                <button type="submit">Envoyer</button>
            </div>              
          </form>
        </div>  
        <div class="tableau">   
        <table>
            <thead>
              <tr>
                <th>Voyage</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Siège(s) réservés</th>
                <th>ID</th>
                <th>État</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Toulouse -> Bordeaux </td>
                <td>11/06/2023</td>
                <td>15:00</td>
                <td>2</td>
                <td>239812</td>
                <td>En attente</td>
             </tr>
              <tr>
                <td>Toulouse -> Montpelier</td>
                <td>22/05/2023</td>
                <td>18:00</td>
                <td>1</td>
                <td>121345</td>
                <td>Annulée</td>
              </tr>
              <tr>
                <td>Rodez -> Toulouse</td>
                <td>22/07/2023</td>
                <td>12:00</td>
                <td>4</td>
                <td>123123</td>
                <td>Annulée par le conducteur</td>
              </tr>
            </tbody>
          </table>
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