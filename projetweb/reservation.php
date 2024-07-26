<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mes réservations</title>

  </head>
  <body>
    <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main6">
        <h1>Mes réservations</h1>
        <div class="cancel-link">
          <a href="annuler_reservation.php">Annuler une réservation</a>
        </div>
        
          <table>
            <thead>
              <tr>
                <th>Voyage</th>
                <th>Date (m/j/a)</th>
                <th>Heure</th>
                <th>Siège(s) réservés</th>
                <th>ID</th>
                <th>État</th> <!-- -->
              </tr>
            </thead>
            <?php /////////////////////////////// Generation du tableau
            require 'config/connexion_postgres.php';
            $id_utilisateur=$_SESSION['id_utilisateur'];
                
            ############## QUERY SQL  ##############
            $query="SELECT * FROM Annonce JOIN Reserver ON Annonce.Id_Annonce = Reserver.Id_Annonce
            WHERE Reserver.Id_Utilisateur = '$id_utilisateur'";

            $requete=pg_query($connexion, $query);

            if(pg_num_rows($requete)>0) ## ICI EN RENTRE VERS LE TABLEAU 
            {
              $file = array();
              while ($file = pg_fetch_assoc($requete)) {
                $tableau[] = $file;
              }
              foreach ($tableau as $file) { ########### 2EME BOUCLE #############
                //voyage date heure siege_reserve id_annonce  etat
                $ville_depart=$file['ville_depart'];
                $ville_destination=$file['ville_destination'];
                $nb_sieges_reserves=$file['nb_sieges_reserves'];
                $id_annonce=$file['id_annonce'];
                $voyage=$ville_depart." 👉 ".$ville_destination;

                $date_depart=$file['date_depart'];
                $heure_depart=$file['heure_depart'];

                if($file['annulation_publication']==false){
                  $etat_annonce="Annulé";
                }
                elseif($date_depart<date('Y-m-d')){
                  $etat_annonce="Expiré";
                }
                elseif($date_depart===date('Y-m-d') && $heure_depart<date('H:i:s')){
                  $etat_annonce="Expiré";
                }
                else{
                  $etat_annonce="En attente";
                }
            ?>
                  </tbody>
                      <tr>
                        <td><?php echo $voyage; ?></td>
                        <td><?php echo $date_depart; ?></td>
                        <td><?php echo $heure_depart; ?></td>
                        <td><?php echo $nb_sieges_reserves; ?></td>
                        <td><?php echo $id_annonce; ?></td>
                        <td><?php echo $etat_annonce; ?></td> <!-- En attente / Expiré / Annulé -->
                      </tr>
                    </tbody>
            <?php
              }
            }
            else {
              echo '</tbody>';
                echo '<tr>';
                  echo '<td>     -     </td>';
                  echo '<td>     -     </td>';
                  echo '<td>     -     </td>';
                  echo '<td>     -     </td>';
                  echo '<td>     -     </td>';
                  echo '<td>     -     </td>';
                echo '</tr>';
              echo '</tbody>';
            } ?> <!------------------------------------------------------->
          </table>
  </main>

  <!-- Inclusion du footer -->
  <footer>
    <?php  include ('footer.php'); ?>
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