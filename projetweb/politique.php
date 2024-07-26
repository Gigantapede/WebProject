<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Politique  </title>
  </head>
  <body>

      <!-- Inclusion du header -->
      <header>
        <?php include ('header.php'); ?>
      </header>   

      <main class="main2">
        <h1>Politique de confidentialité</h1>

        <p>Notre site de covoiturage gratuit en France s'engage à protéger la confidentialité des utilisateurs. Cette politique de confidentialité explique comment nous collectons, utilisons, partageons et protégeons les informations personnelles des utilisateurs.</p>

        <h2>Collecte d'informations</h2>

        <p>Nous collectons certaines informations personnelles lors de l'utilisation de notre site de covoiturage. Cela peut inclure :</p>

        <ul>
          <li>Les informations de contact (nom, adresse e-mail, numéro de téléphone) fournies volontairement par les utilisateurs lors de l'inscription ou de la création d'un compte.</li>
          <li>Les informations de profil, telles que la photo de profil et les préférences de voyage, fournies volontairement par les utilisateurs.</li>
          <li>Les informations relatives aux trajets de covoiturage, telles que les points de départ et d'arrivée, les dates et les heures, ainsi que les préférences de voyage partagées par les utilisateurs.</li>
        </ul>

        <h2>Utilisation des informations</h2>

        <p>Les informations collectées peuvent être utilisées aux fins suivantes :</p>

        <ul>
          <li>Pour faciliter la mise en relation entre les conducteurs et les passagers intéressés par le covoiturage.</li>
          <li>Pour communiquer avec les utilisateurs concernant les trajets de covoiturage, les mises à jour du site et les offres pertinentes.</li>
          <li>Pour améliorer et personnaliser l'expérience des utilisateurs sur notre site.</li>
          <li>Pour analyser les données et les tendances d'utilisation afin d'optimiser nos services.</li>
        </ul>

        <h2>Partage d'informations</h2>

        <p>Nous pouvons partager certaines informations personnelles avec des tiers dans les cas suivants :</p>

        <ul>
          <li>Avec les utilisateurs intéressés par un trajet de covoiturage spécifique afin de faciliter la mise en relation.</li>
          <li>Avec nos partenaires de confiance qui fournissent des services complémentaires pour améliorer l'expérience des utilisateurs, tels que les services de paiement en ligne ou les services de vérification d'identité.</li>
          <li>Lorsque cela est requis par la loi ou dans le cadre d'une procédure judiciaire.</li>
        </ul>

        <h2>Sécurité des données</h2>

        <p>Nous prenons des mesures de sécurité appropriées pour protéger les informations personnelles des utilisateurs contre tout accès non autorisé, altération, divulgation ou destruction.</p>

        <h2>Modifications de la politique de confidentialité</h2>

        <p>N
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
