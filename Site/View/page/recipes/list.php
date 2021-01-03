<!--
    Auteur: Vitor Silva & Ricardo Delgado
    Date: 11.12.2020
    Description : Contenu différent à afficher dans la page recettes
-->
<div class="d-flex flex-row flex-wrap justify-content-around">
        <?php
        // Foreach qui affiche toutes les recettes stockées dans la DB
        foreach ($allRecipes as $recipe) {
            echo '<div class="card m-5" style="width:400px">'; // Div de carte
            echo '<img class="card-img-top" src="../images/' . $recipe['recImage'] .'.jpg" alt="Carbonara">'; // Image de la recette
            echo '<div class="card-body">'; // Div informations
            echo '<h4 class="card-title">' . $recipe['recName'] . '</h4>'; // Nom de la recette
            echo '<p class="card-text">' . $recipe['recIngredients'] . '</p>'; // Ingérdients de la recette
            echo '<h6>Region : ' . $recipe['recRegion'] . '</h6><br>';
            echo '<a href="index.php?controller=recipes&action=oneRecipe&idRecipes=' . $recipe['idRecipes'][0] . '"class="btn btn-primary">Détails</a>'; // Btb accès détails
            echo '</div>';
            echo '</div>';
        } 
        ?>
</div>