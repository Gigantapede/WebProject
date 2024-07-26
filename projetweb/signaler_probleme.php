<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signaler un probléme </title>

  </head>
  <body>
<!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main4">
        <form action="fill_up_form/fill_form_signaler.php" method="POST">
          <h2>Signaler un problème</h2>
          <?php if(isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <label for="nom">Nom :</label>
          <input type="text" id="nom" name="nom" placeholder="entrez votre nom"> <!-- required> -->
          
          <label for="email">Adresse e-mail :</label>
          <input type="text" id="email" name="email" placeholder="entrez votre mail"> <!-- required> -->
          
          <label for="probleme">Description du problème :</label>
          <textarea id="probleme" name="probleme" placeholder="entrez la description de votre probléme"></textarea> <!-- required> -->
          
          <input type="submit" value="Envoyer">
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
      