<!doctype html>
<html lang="fr-ch">

<head>
  <!--
    Auteurs : Vitor Silva & Ricardo Delgado
    Date : 28.09.2020
    Description : Page d'acceuil du site de recettes
  -->
  <meta charset="utf-8">
  <title>Al Tajine</title>
  <link rel="stylesheet" href="../Src/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Src/css/style.css">
  <script src="https://kit.fontawesome.com/a3d242c9b3.js" crossorigin="anonymous"></script>
</head>

<body class="m-0">
  <!-- Barre de navigation -->
  <nav class="navigation sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="wlink py-2 d-none d-md-inline-block" href="homePage.php">Page d'accueil</a>
      <a class="wlink py-2 d-none d-md-inline-block" href="recipes.php">Recettes</a>
      <a class="wlink py-2 d-none d-md-inline-block" href="contact.php">Contact</a>
      <a class="wlink py-2 d-none d-md-inline-block" href="#">Ajouter une recette</a>
      <a class="wlink py-2 d-none d-md-inline-block" href="register.php">Register</a>
      <a class="wlink py-2 d-none d-md-inline-block" href="#">Crédits</a>
    </div>
  </nav>

  <div class="d-flex justify-content-center mt-5">
    <h1 id="indexTitle" class="font-weight-bold display-1">El Letche</h1> <!-- Titre du site -->
  </div>

  <div id="homePageText" class="d-flex mt-4 container-md">
    <!-- Présentation du site internet -->
    <h4>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis fugit, enim molestiae praesentium eveniet,
      recusandae et error beatae facilis ex harum consequuntur, quia pariatur non. Doloribus illo, ullam blanditiis ab.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis fugit, enim molestiae praesentium eveniet,
      recusandae et error beatae facilis ex harum consequuntur, quia pariatur non. Doloribus illo, ullam blanditiis ab.
    </h4>
  </div>

  </div>

  <!-- Cartes avec les dernières recette + lien vers toutes les recettes -->
  <div id="indexRecipiesContentor" class="d-flex flex-row justify-content-around m-5">
    <div class="card-deck mt-5 text-center">
      <a href="" class="link">
        <!-- Lien qui renvoie sur la page de la recette affichée -->
        <div class="card" style="width: 20rem;">
          <!-- Div qui contient une carte avec recette  -->
          <img src="../images/salmone.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <!-- Nom de la recette + déscription -->
            <h5 class="card-title">Saumon à la poele</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis fugit, enim molestiae praesentium eveniet,
              recusandae et error beatae facilis ex harum consequuntur, quia pariatur non. Doloribus illo, ullam blanditiis ab.</p>
          </div>
      </a>
    </div>
    <a href="" class="link">
      <div class="card" style="width: 20rem;">
        <!-- Div qui contient une carte avec recette  -->
        <img src="../images/pancake.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pancakes légers</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis fugit, enim molestiae praesentium eveniet,
            recusandae et error beatae facilis ex harum consequuntur, quia pariatur non. Doloribus illo, ullam blanditiis ab.</p>
        </div>
    </a>
  </div>
  <a href="" class="link">
    <div class="card" style="width: 20rem;">
      <!-- Div qui contient une carte avec recette  -->
      <img src="../images/chicken.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Poulet KFC</h5>
        <p style="text-decoration: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis fugit, enim molestiae praesentium eveniet,
          recusandae et error beatae facilis ex harum consequuntur, quia pariatur non. Doloribus illo, ullam blanditiis ab.</p>
      </div>
  </a>
  </div>
  <a href="" class="link">
    <div class="card" style="width: 20rem;">
      <!-- Div qui contient une carte avec recette  -->
      <img src="../images/pizza.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pizza aux légumes</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis fugit, enim molestiae praesentium eveniet,
          recusandae et error beatae facilis ex harum consequuntur, quia pariatur non. Doloribus illo, ullam blanditiis ab.</p>
      </div>
  </a>
  </div>
  <a href="recipes.php" class="link">
    <div class="card" style="width: 20rem;">
      <!-- Div qui sert de lien vers la page avec toutes les recettes du site -->
      <img src="../images/cake.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Autres recettes</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis fugit, enim molestiae praesentium eveniet,
          recusandae et error beatae facilis ex harum consequuntur, quia pariatur non. Doloribus illo, ullam blanditiis ab.</p>
      </div>
  </a>
  </div>
  </div>
  </div>
</body>

<footer class="page-footer font-small d-inline-flex justify-content-between">
  <div></div>
  <div class="footer-copyright text-center py-2">© 2020 Copyright:
    <a target="blank" class="wlink" href="https://etml.ch/">ETML.ch</a>
  </div>
  <div class="d-flex text-center">
    <a target="blank" href="https://instagram.com"><i class="fab fa-instagram wlink"></i></a>
    <a target="blank" href="https://twitter.com"><i class="fab fa-twitter wlink"></i></a>
    <a target="blank" href="https://twitch.tv"><i class="fab fa-twitch wlink"></i></a>
    <a target="blank" href="https://twitch.tv"><i class="fab fa-apple wlink"></i></a>
  </div>
</footer>

</html>