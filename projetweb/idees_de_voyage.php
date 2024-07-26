<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Idées de voyage</title>

  </head>
  <body>
    <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main2">
        <h2>Idées de voyages en France</h1>
        <h2>Paris</h2>
        <p>Découvrez la ville lumière et ses monuments emblématiques tels que la Tour Eiffel, l'Arc de Triomphe et Notre-Dame. Flânez le long de la Seine ou visitez les musées célèbres comme le Louvre et le Musée d'Orsay.</p>
        <br>
        <h2>Marseille</h2>
        <p>Profitez du soleil et de la mer Méditerranée dans la ville phocéenne. Visitez le Vieux-Port, la basilique Notre-Dame de la Garde ou le Château d'If. Goûtez à la bouillabaisse, le plat traditionnel de la ville.</p>
        <br>
        <h2>Bordeaux</h2>
        <p>Découvrez la ville de vin et de gastronomie. Visitez les châteaux de la région pour déguster les vins célèbres de Bordeaux. Flânez dans le centre historique, classé au patrimoine mondial de l'UNESCO.</p>
        <br>
        <h2>Lyon</h2>
        <p>Découvrez la ville des lumières et sa cuisine renommée. Visitez la basilique Notre-Dame de Fourvière, le Vieux-Lyon et le musée des Beaux-Arts. Goûtez aux spécialités locales telles que les quenelles et les pralines.</p>
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