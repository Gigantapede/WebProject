<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire de fin de voyage</title>
  </head>
  <body>
    <!-- Inclusion du header -->
    <header>
        <?php include ('header.php'); ?>
    </header>

    <main class="main5">
        <h1>Formulaire obligatoire de fin de voyage</h1>
        
        <form action="#" method="post">
           <div>
            <h2>Sélectionnez les personnes présentes au voyages 53432260 Toulouse -> Bordeaux : </h2>

            <input type="checkbox" name="personne1" id="personne1" />
            <label for="personne1">Personne 1 (conducteur)</label>
            <br />
            
            <input type="checkbox" name="personne2" id="personne2" />
            <label for="personne2">Personne 2</label>
            <br />
            
            <input type="checkbox" name="personne3" id="personne3" />
            <label for="personne3">Personne 3</label>
            <br />

            <input type="checkbox" name="sieges_vides" id="sieges_vides" />
            <label for="sieges_vides">Sièges vides</label>
            <br />
            
            <h2>Note pour le trajet :</h2>
            
            <label for="note">Note :</label>
            <select name="note" id="note">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <br />
           </div> 
            
            <h2>Commentaire (facultatif) :</h2>
            
            <textarea name="commentaire" id="commentaire" rows="5" cols="50"></textarea>
            <br />
            
            <input type="submit" value="Envoyer" />
        </form>
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