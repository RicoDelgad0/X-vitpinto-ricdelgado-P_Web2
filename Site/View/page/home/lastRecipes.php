<!--
    Auteur: Vitor Silva & Ricardo Delgado
    Date: 11.12.2020
    Description : Contenu de la page d'acceuil
-->

<div class="d-flex justify-content-center mt-5">
  <h1 id="indexTitle" class="font-weight-bold display-1">El Letche</h1> <!-- Titre du site -->
</div>

<div id="homePageText" class="d-flex mt-4 container-md">
  <!-- Présentation du site internet -->
  <h4>
    Bienvenue sur El Letche, le site de cuisine numéro 1 en Suisse romande ! Laissez vous porter par les effluves délicieux des plus de 5000 plats
    recensés sur El Letche ! Visitez les quatre coins du monde sans même quitter votre cuisine en suivant les marches à suivre des recettes et sentez
    frétiller vos papilles le temps d'un repas. El Letche, La cuisine que vous méritez !
  </h4>
</div>

<!-- Cartes avec les dernières recette + lien vers détails -->
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