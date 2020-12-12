<div class="d-flex flex-row flex-wrap justify-content-around"> <!-- Div qui contient carte avec présentation d'une recette-->
        <?php
        foreach ($allRecipes as $recipe) {
            echo '<div class="card m-5" style="width:400px">';
            echo '<img class="card-img-top" src="../images/' . $recipe['recImage'] .'.jpg" alt="Carbonara">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">' . $recipe['recName'] . '</h4>';
            echo '<p class="card-text">' . $recipe['recIngredients'] . '</p>';
            echo '<a href="index.php?controller=recipes&action=oneRecipe&idRecipes=' . $recipe['idRecipes'][0] . '"class="btn btn-primary">Détails</a>';
            echo '</div>';
            echo '</div>';
        } 
        ?>
</div>