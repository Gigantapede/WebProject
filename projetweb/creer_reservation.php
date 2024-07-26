<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Créer une réservation</title>
  </head>
  <body>
   <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>

    <main class="main6">
          <?php
            $ville_depart=$_SESSION['1_ville_depart_reservation'];
            $ville_destination=$_SESSION['1_ville_destination_reservation'];
            $date_depart=$_SESSION['1_date_depart_reservation'];
            $heure_depart=$_SESSION['1_heure_depart_reservation'];
            $nb_sieges_reserve=$_SESSION['1_nb_sieges_reserve'];
            $id_annonce=$_SESSION['1_id_annonce'];
            $show_voyage=$ville_depart." 👉 ".$ville_destination;
          ?>
          <h2>Réserver le voyage de l'annonce <?php echo $id_annonce;?> de <?php echo $ville_depart;?> à <?php echo $ville_destination;?> : </h2>
          
          <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          
          <table>
            <thead>
              <tr>
                <th>Voyage</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Siège(s) réservés</th>
                <th>ID</th>
              </tr>
            </thead>
            </tbody>
                <tr>
                  <td><?php echo $show_voyage; ?></td>
                  <td><?php echo $date_depart; ?></td>
                  <td><?php echo $heure_depart; ?></td>
                  <td><?php echo $nb_sieges_reserve; ?></td>
                  <td><?php echo $id_annonce; ?></td>
                </tr>
              </tbody>

          </table>
          <div>
            <form action="fill_up_form/set_reservation_confirm.php" method="POST">
              <input type="hidden" name="id_annonce" value="<?php echo $id_annonce ?>">
              <input type="hidden" name="nb_sieges_souhaite" value="<?php echo $nb_sieges_reserve ?>">
              <button type="submit" class="bouton-reserver">Réserver maintenant</button>
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