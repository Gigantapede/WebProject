<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tous les trajets</title>

  </head>
  <body>
    <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main2">  
        <h1>Tous les trajets</h1>
        <br>
        <h3>
          Paris → Lille <br>
          Paris → Reims <br>
          Grenoble → Lyon <br>
          Paris → Bruxelles <br>
          Lyon → Paris <br>
          Rennes → Paris 
        </h3>
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