<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tous les pays</title>
    
  </head>
  <body>
    <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main2">
        <h1>Tous les pays</h1>
        <h2>Covoitri vous emmène dans 10 pays d'Europe</h2>
        <br>
        <h3>Quand et où partir en Europe ?</h3>
        <br>
        <p>Tout au long de l’année, les bus ou covoiturages BlaBlaCar vous emmènent aux 4 coins de l'Europe, découvrez les destinations européennes emblématiques en passant par l'iconique Tour Eiffel  à Paris au célèbre Big Ben sans oublier la magnifique Tour de Pise. Quelques soient les saisons, BlaBlaCar est votre partenaire de voyage à travers tout le Vieux continent.</p>
        <br>    
        <h3>L'Allemagne</h3>
        <br>
        <p>Riche en traditions fortes, en cites médiévales reconstruites à l’identique après la guerre, l’Allemagne est constituée de villages de charme au cœur de paysages pleins de douceur. L’incroyable patrimoine du pays vous laissera rêveur : châteaux, musées, cathédrales, cités médiévales, gastronomie, palais, nature et Histoire, il y a de quoi faire. Vous trouverez les clubs les plus branchés d’Europe, particulièrement à Berlin, c’est là que sont organisés les festivals les plus connus.</p>
        <br>
        <h3>La Suisse</h3>
        <br>
        <p>Composée de paysages étonnamment variés, la Suisse a des airs d’îlot planté au centre de l’Europe. Dessiné par ses paysages montagneux et ses nombreux lacs, le pays est une incroyable source hydrologique en Europe où le Rhin, le Rhône et le Danube prennent leur source. Encastrée entre le Jura, les Alpes et le Plateau, la région suisse est très naturelle. Pour passer un week-end ou plus, rien de tel qu’une promenade sur les flancs du lac Léman, une session shopping à Zurich tout en dégustant un peu partout les spécialités locales comme les traditionnels fromages ou les fins chocolats suisses.</p>
        <br>
        <h3>Le Luxembourg</h3>
        <br>
        <p>Situé entre la France, la Belgique et l’Allemagne, le Luxembourg se démarque comme étant l’un des plus petits pays d’Europe. Mais ne vous y trompez pas : le Grand-Duché déborde de richesses naturelles et culturelles qui n’attendent que vous. Siège de nombreuses institutions européennes, le Luxembourg surprend par ses nombreux lieux touristiques notamment avec ses monuments classés patrimoine mondial de l’Unesco. Embarquez avec les bus ou covoiturages BlaBlaCar et découvrez que visiter et que faire au Luxembourg, pays cosmopolite par excellence. L'Europe du Nord-Ouest</p>
        <br>
        <h3>La France</h3>
        <br>
        <p>Avec 89 millions de touristes en 2017, la France reste la première destination touristique au monde. Entre ses villes à la culture riche et sa nature variée d’est en ouest, ce n’est pas très étonnant. Chargée d’histoire et de beauté, chacune des régions françaises mérite d’être découverte avec une diversité tant patrimoniale, culturelle, architecturale mais aussi culinaire. Et si vous étiez le prochain à fouler le sol de l'Hexagone ? Promis, il y a de la place pour tout le monde.</p>
        <br>
        <h3>Les Pays-Bas</h3>
        <br>
        <p>Souvent associés aux moulins, aux champs  tulipes qui s’étendent à perte de vue et aux vélos, les Pays-Bas disposent de nombreux autres atouts pour vous séduire. Visiter les Pays-Bas, c’est découvrir Amsterdam, une capitale cosmopolite aux multiples facettes, arpenter les quais et les villages à Delft, admirer « le nouveau Manhattan » à Rotterdam, se noyer dans les couleurs et les parfums des champs de fleurs à Keukenhof, savourer les fromages éponymes de Gouda... Prenez place à bord et découvrez que faire et voir aux Pays-Bas.</p>
        <br>
        <h3>L'Espagne</h3>
        <br>
        <p>La mer, l’océan, la montagne et des villes à l’architecture incroyable. Madrid, Barcelone, Valence, Bilbao… Nos voisins espagnols habitent un pays où chaque région possède ses spécificités, sa culture, parfois sa langue. Et pour ne rien gâcher, le soleil est là aussi. Les bus ou covoiturages BlaBlaCar vous emmènent de l’autre côté des Pyrénées à la découverte de tous les charmes de l’Espagne, ses traditions et sa riche histoire. Olé !</p>
        <br>
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