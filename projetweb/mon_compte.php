<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Annuler une réservation</title>
  </head>
  <body>
   <!-- Inclusion du header -->
    <header>
      <?php include ('header.php'); ?>
    </header>   
    <br>
    <br>
    <br>
    <div class="title">
  <h1>Information  du profil</h1> 
  <a href="login/deconnexion.php">Déconnexion</a>
</div>
<div class="imgcontainer12">
  <img src="imgs/avatar.png" alt="avatar1" class="avatar12">
</div>
    <div class="moncompte">
      
       
          <table class="profile-table1">
            <tr>
              <td class="label2">Nom :</td>
              <td class="value"><?php echo $_SESSION['nom']; ?></td>
              <td class="label2">Récompenses :</td>
              <td class="value"><?php echo $_SESSION['recompense']; ?></td>
            </tr>
            <tr>
              <td class="label2">Prénom :</td>
              <td class="value"><?php echo $_SESSION['prenom'];?></td>
              <td class="label2">Role :</td>
              <td class="value"><?php echo $_SESSION['role_user'];?></td>
            </tr>
            <tr>
              <td class="label2">Date de naissance (a/m/j) :</td>
              <td class="value"><?php echo $_SESSION['date_naissance'];?></td>
              <td class="label2">Voiture :</td>
              <?php if($_SESSION['role_user']=='Conducteur') { ?>
                <td class="value"><?php echo $_SESSION['modele']." / ".$_SESSION['num_immatriculation']." / ".$_SESSION['couleur']?></td>
              <?php } else { ?>
                <td class="value">-</td>
              <?php } ?>
            </tr>
            <tr>
              <td class="label2">Statut :</td>
              <td class="value"><?php echo $_SESSION['statut'];?></td>
              <td class="label2">Strikes :</td>
              <td class="value"><?php echo $_SESSION['strikes'];?></td>
            </tr>
            <tr>
              <td class="label2">Email : </td>
              <td class="Value"><?php echo $_SESSION['email'];?></td>
              <td class="link">Editer un profil <a href="#"></a> </td>
            </tr>
          </table>
            
      </div> 
   <br>
   <br>


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