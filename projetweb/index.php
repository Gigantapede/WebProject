<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page d'accueil </title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
      $(function() {
        var villes = [
          "Paris",
          "Lyon",
          "Marseille",
          "Bordeaux",
          "Nantes",
          "Toulouse",
          "Nice",
          "Strasbourg",
          "Lille",
          "Rennes"
        ];
        $("#arrivee").autocomplete({
          source: villes
        });
        $("#depart").autocomplete({
          source: villes
        });
        $("form.form1").submit(function(e) {
          // empêcher la soumission du formulaire
          e.preventDefault();
          
          var depart = $("#depart").val();
          var arrivee = $("#arrivee").val();
      
          // Vérifier si les 2 villes sont les mêmes
          if (depart === arrivee) {
            // Afficher un message d'erreur 
            $("#error-message").text("Veuillez sélectionner deux villes différentes.");
          } else {
            // Soumettre le formulaire
            this.submit();
          }
        });
      });
    </script>


  </head>
  <body>
<!-- Inclusion du header -->
  <header>
   <?php include ('header.php'); ?>
  </header>

    <main >
      <div class="search-box"> <!-- FORM SEARCH BOX BEGIN -->
        <form action="index.php" method="POST" class="form1">
          <label for="depart" class="label1">Ville de départ :</label>
          <input type="text" id="depart" name="depart" placeholder="Entrez votre ville de départ" required>
  
          <label for="arrivee" class="label1">Ville d'arrivée :</label>
          <input type="text" id="arrivee" name="arrivee"  placeholder="Entrez votre ville d'arrivée" required>
  
          <label for="date" class="label1">Date de départ :</label>
          <input type="date" id="date" name="date" placeholder="Entrez votre date de départ" required>
  
          <label for="nombre_sieges" class="label1">Nombre de sièges :</label>
          <input type="number" id="nombre_sieges" name="nombre_sieges" placeholder=" Nombre de sièges " required>
           
          <input type="submit" value="Rechercher">
        </form>
      </div>  

      <section>
        <?php if(isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <table class="table1">
          <thead>
            <tr>
              <th>Départ</th>
              <th>Arrivée</th>
              <th>Date</th>
              <th>heure</th>
              <th>Sièges disponibles</th>
              <th>ID </th>
            </tr>
          </thead>
          <!-- ////////////////// Generation du tableau ////////////////// -->
          <?php
            require 'config/connexion_postgres.php';
            $_SESSION['saisi_recherche']=false;

            #on voit si l'utilisateur a saisi quelque chose
            if(isset($_POST['depart']) && isset($_POST['arrivee']) && isset($_POST['date']) && isset($_POST['nombre_sieges'])){
                function clean_input($data_input){ #pour eviter des erreurs de saisi ou de possibles attaques d'injection de code
                    $data_input=trim($data_input); #elimine les 'espaces'
                    $data_input=stripslashes($data_input); #elimine les '\'
                    $data_input=htmlspecialchars($data_input); #derniere precaution
                    return $data_input;
                }

                $ville_depart=clean_input($_POST['depart']);
                $ville_destination=clean_input($_POST['arrivee']);
                #$date_depart=clean_input($_POST['date']);
                $nb_sieges_souhaite=clean_input($_POST['nombre_sieges']);

                $today_now=date('Y-m-d');

                $query="SELECT * FROM annonce WHERE ville_depart='$ville_depart' AND ville_destination='$ville_destination' AND nb_sieges_disponibles>='$nb_sieges_souhaite' ";
                $requete=pg_query($connexion, $query);

                if(pg_num_rows($requete)>0) {
                  $_SESSION['saisi_recherche']=true;
                  $file = array();
                  while ($file = pg_fetch_assoc($requete)) {
                    $tableau[] = $file;
                  }
                  foreach ($tableau as $file) { // Acceder a chaque element de ligne du tableau SELECTED
                    $ville_depart=$file['ville_depart'];
                    $ville_destination=$file['ville_destination'];
                    $date_depart=$file['date_depart'];
                    $heure_depart=$file['heure_depart'];
                    $nb_sieges_disponibles=$file['nb_sieges_disponibles'];
                    $id_annonce=$file['id_annonce'];
                          
                    if($file['annulation_publication']!=false && $date_depart>=date('Y-m-d') && $heure_depart>date('H:i:s')) {
          ?>
                        </tbody>
                          <tr>
                            <td><?php echo $ville_depart; ?></td>
                            <td><?php echo $ville_destination; ?></td>
                            <td><?php echo $date_depart; ?></td>
                            <td><?php echo $heure_depart; ?></td>
                            <td><?php echo $nb_sieges_disponibles; ?></td>
                            <td><form action="fill_up_form/fill_form_create_reservation.php" method="POST">
                              <input type="hidden" name="id_annonce" value="<?php echo $id_annonce ?>">
                              <input type="hidden" name="nb_sieges_souhaite" value="<?php echo $nb_sieges_souhaite ?>">
                              <button type="submit"><b><?php echo $id_annonce; ?></b></button>
                            </form></td>
                          </tr>
                        </tbody>
            <?php   }
                  }
                } else {
                    $_SESSION['saisi_recherche']=true;
                    echo '</tbody>';
                      echo '<tr>';
                        echo '<td>     -     </td>';
                        echo '<td>     -     </td>';
                        echo '<td>     -     </td>';
                        echo '<td>     -     </td>';
                        echo "<td>Il n'y a pas d'annonces de $ville_depart vers $ville_destination avec $nb_sieges_souhaite sièges disponibles pour le moment, je vous invite à réessayer en réduisant le nombre de sièges ou veuillez réessayer plus tard, merci</td>";
                        echo '<td>     -     </td>';
                      echo '</tr>';
                    echo '</tbody>';
                }
              }
            ?> <!------------------------------------------------------->
            <!-- ////////////////// Generation du tableau ////////////////// -->
          
          <?php ////////////////// Generation du tableau ALL ANNONCES //////////////////
            if($_SESSION['saisi_recherche']===false){
              //require 'config/connexion_postgres.php';
              $query="SELECT * FROM annonce";
              $requete02=pg_query($connexion, $query);

              if(pg_num_rows($requete02)>0) {
                $file = array();
                while ($file = pg_fetch_assoc($requete02)) {
                  $tableau[] = $file;
                }
                foreach ($tableau as $file) { // Acceder a chaque element de ligne du tableau SELECTED
                  $ville_depart=$file['ville_depart'];
                  $ville_destination=$file['ville_destination'];
                  $date_depart=$file['date_depart'];
                  $heure_depart=$file['heure_depart'];
                  $nb_sieges_disponibles=$file['nb_sieges_disponibles'];
                  $id_annonce=$file['id_annonce'];
                  
                  if($file['annulation_publication']!=false && $date_depart>=date('Y-m-d') || $file['annulation_publication']!=false && ($date_depart==date('Y-m-d' ) && $heure_depart>date('H:i:s'))) {
          ?>
                </tbody>
                  <tr>
                    <td><?php echo $ville_depart; ?></td>
                    <td><?php echo $ville_destination; ?></td>
                    <td><?php echo $date_depart; ?></td>
                    <td><?php echo $heure_depart; ?></td>
                    <td><?php echo $nb_sieges_disponibles; ?></td>
                    <td><form action="fill_up_form/fill_form_create_reservation.php" method="POST">
                      <input type="hidden" name="id_annonce" value="<?php echo $id_annonce ?>">
                      <button type="submit"><b><?php echo $id_annonce; ?></b></button>
                    </form></td>
                  </tr>
                </tbody>
          <?php   }
                }
              } else {
                echo '</tbody>';
                  echo '<tr>';
                    echo "<td>     - Il n'y a pas d'annonces       </td>";
                    echo "<td>      avec ces fonctionnalités      </td>";
                    echo '<td>      pour le moment, veuillez      </td>';
                    echo '<td>      réessayer plus tard      -     </td>';
                    echo '<td>     -     </td>';
                    echo '<td>     -     </td>';
                  echo '</tr>';
                echo '</tbody>';
              } 
            }
          ?> <!------------------------------------------------------->
        </table>
      </section>
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
