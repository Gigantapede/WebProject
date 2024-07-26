<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Annuler une annonce</title>
  </head>
  <body>
   <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main7">

        <h1>Entrez l'ID de l'annonce à annuler : </h1>
        <?php if(isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <?php if(isset($_GET['success'])) { ?>
          <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <div>
          <form action="del_fill_form/del_mon_annonce.php" method="POST" class="form_annul">
            <div class="id">
                <label for="id">ID de l'annonce :</label>
                <input type="text" id="id" name="id_annonce" placeholder="Écrivez l'ID ici">
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
              <th>Ville de départ</th>
              <th>Ville d'arrivée</th>
              <th>Date (a/m/j)</th>
              <th>Heure</th>
              <th>Sièges disponibles</th>
              <th>ID</th>
              <th>Date de publication (a/m/j)</th>
              <th>État</th> <!-- En attente / Expiré / Annulé -->
            </tr>
          </thead>
          <?php /////////////////////////////// Generation du tableau
          require 'config/connexion_postgres.php';
          $id_utilisateur=$_SESSION['id_utilisateur'];
          $query="SELECT * FROM annonce WHERE id_utilisateur='$id_utilisateur'";
          $requete=pg_query($connexion, $query);

          if(pg_num_rows($requete)>0)
          {
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
              $date_publication=$file['date_publication'];

              if($file['annulation_publication']==false){
                $etat_annonce="Annulé";
              }
              elseif($date_depart<date('Y-m-d')){
                $etat_annonce="Expiré";
              }
              elseif($date_depart===date('Y-m-d') && $heure_depart<date('H:i:s')){
                $etat_annonce="Expiré";
              }
              elseif(!($nb_sieges_disponibles>0)){
                $etat_annonce="Sièges remplis et en attente";
              }
              else{
                $etat_annonce="En attente";
              }
          ?>
             </tbody>
                <tr>
                  <td><?php echo $ville_depart; ?></td>
                  <td><?php echo $ville_destination; ?></td>
                  <td><?php echo $date_depart; ?></td>
                  <td><?php echo $heure_depart; ?></td>
                  <td><?php echo $nb_sieges_disponibles; ?></td>
                  <td><?php echo $id_annonce; ?></td>
                  <td><?php echo $date_publication; ?></td>
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
                echo '<td>     -     </td>';
                echo '<td>     -     </td>';
              echo '</tr>';
            echo '</tbody>';
          } ?> <!------------------------------------------------------->
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