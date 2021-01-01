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
  <?php
  foreach ($recipes as $recipe) {
    echo '<div class="card-deck mt-5 text-center">';
    echo '<a href="index.php?controller=recipes&action=oneRecipe&idRecipes=' . $recipe["idRecipes"] . '" class="link">';
    echo '<div class="card" style="width: 20rem;">';
    echo '<img src="../images/' . $recipe['recImage'] . '.jpg" class="card-img-top" alt="une des trois dernières recettes du site">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $recipe["recName"] . '</h5>';
    echo '<p>' . $recipe["recTime"] . ' minutes de préparation <br> Difficultée : ' . $recipe["recDifficulty"] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</a>';
    echo '</div>';
  }
  ?>
</div>
</body>