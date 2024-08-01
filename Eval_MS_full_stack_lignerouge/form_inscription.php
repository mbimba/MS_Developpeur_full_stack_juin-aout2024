<!-- ICI MON FORMULAIRE D'INSCRIPTION: ESPACE CLIENT -->



<?php
require_once ("php/header.php");
require_once("database.php");
?>

<div class="parallax2">       <!--         DEBUT PARALLAX2    -->

<!-- Add a wrapper div to center the content -->
<div class="wrapper">
  <main class="monmain reducmarge">
    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2><strong>Inscription</strong></h2>
          <form action="" method="post" class="bordure">
            <div class="form-group">
              <label for="nom_prenom" class="form-label"><strong>Nom et prénom :</strong></label>
              <input type="text" class="form-control" id="nom_prenom" name="nom_prenom" required>
            </div>
            <div class="form-group">
              <label for="email" class="form-label"><strong>Email</strong></label>
              <input type="email" class="form-control" id="votreemail" name="mail" placeholder="dave.loper@afpa.fr" required>
            </div>
            <div class="form-group">
              <label for="motdepasse" class="form-label"><strong>Mot de passe :</strong></label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>    <br>    <br>    
            <div class="">
            <button type="submit" class="btn btn-primary float-right btn-sm">S'inscrire</button>
            </div>
            <br><br>
          </form>
          <p>Déjà un compte ? <a href="form_connexion.php">Connectez-vous ici</a></p>
        </div>
      </div>
    </div>
  </main>
  </div>            <!--         FIN PARALLAX2    -->





















<!-- ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS -->
<?php
require_once ('php/footer.php');
?>
