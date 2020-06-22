
<!doctype html>
<html lang="fr">
  <head>
      <title><?=$titre?></title>   <!-- Élément spécifique -->
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="Contenu/style.css"/>


      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script src="https://kit.fontawesome.com/22878924ef.js" crossorigin="anonymous"></script>
      <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
  </head>
  <body>
            <nav class="nav1">

                <ul class="ulNav1">
                <a href="index.php">    <div class="navavatar">

 <img class="avatar3" src="contenu/images/jf.jpg" alt="">
            <img class="vertical" src="contenu/images/vertical.png" alt="">
            <h2 class='prenom'>Jean Forteroche</h2>
            </div></a>
                    <li class="navigationHome1"><a href="index.php">ACCUEIL</a></li>
                    <li class="navigation1"><a href='index.php?action=about'>BIOGRAPHIE</a></li>
                    <li class="navigation1"><a href='index.php?action=about'>CONTACT</a></li>
                    <?php
if (isset($_SESSION['pseudo'])) {
    echo '<li class="navigation1"><a href="index.php?action=logout">DECONNEXION</a></li>';
    echo '<li class="navigation1"><a href="index.php?action=admin">ADMINISTRATION</a></li>';
} else {
    echo '<li class="navigation1"><a href="index.php?action=login">CONNEXION</a></li>';
}?>
            <i class="fas fa-search"></i>

            </ul>
            <hr class="hr2">
            </nav>

              <?=$contenu?>   <!-- Élément spécifique -->


              <script src="Contenu/signale.js"></script>

  </body>
</html>
