<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A Propos</title>
  </head>

  <body>
<!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main2">
        
          <h2>À propos de nous</h2>
          <p>Nous sommes un groupe d'étudiants passionnés par l'environnement et soucieux de réduire notre empreinte carbone. C'est pourquoi nous avons créé ce site web de covoiturage gratuit pour encourager les gens à partager des trajets ensemble.</p>
          <p>Notre objectif est de rendre les déplacements plus écologiques, plus économiques et plus conviviaux. Nous sommes convaincus que chaque petit geste compte et que si nous pouvons tous contribuer à réduire les émissions de gaz à effet de serre, nous pourrons faire une différence positive pour notre planète.</p>
          <p>Nous sommes fiers d'offrir un service gratuit et facile à utiliser pour les conducteurs et les passagers. Notre plateforme permet de trouver rapidement des personnes qui voyagent dans la même direction et de partager les coûts de transport.</p>
          <p>Nous sommes également soucieux de la sécurité de nos utilisateurs et nous veillons à ce que toutes les informations personnelles soient protégées.</p>
          <p>Nous sommes ravis de voir notre communauté grandir chaque jour et nous espérons continuer à encourager la pratique du covoiturage pour un avenir plus durable.</p>
    
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
        pageLanguage: 'fr', // la langue de la page
        includedLanguages: 'fr,en,es,ar', // les langues de traduction disponibles
        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL // le style de la barre de langue
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