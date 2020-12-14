<!--
    Auteur: Vitor Silva & Ricardo Delgado
    Date: 11.12.2020
    Description : Contenu de la page d'acceuil
-->


<!-- TODO: Faire en sorte de récupérer les 3 ou 4 dernières recettes avec un foreach de manière automatique -->
<!-- TODO: Ajouter des commentaires -->

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
  <a href="index.php?controller=recipes&action=allRecipes" class="link">
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