<?php
include '/Controller/recipeController.php';

$database = new recipeController();

$recipes = $database->allRecipesAction();

?>
<header class="d-flex p-2 flex-column mt-5">
        <h1 class="display-4 text-danger align-self-center">Recettes</h1>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a href="homePage.php" class="navbar-brand">El Letche</a> <!-- Nom du site, qui sert de lien vers la page d'acceuil -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Europa</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Africa</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">America</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Asia</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Flat earth</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Australia</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
            </ul>
        </nav>
    </header>
        <div class="d-flex flex-row flex-wrap justify-content-around"> <!-- Div qui contient carte avec présentation d'une recette-->
        <?php
        /**
         * FIXME: Corriger le foreach pour qu'il récupère bien les informations
         */
        foreach ($recipes as $recipe) {
            echo '<div class="card m-5" style="width:400px">';
            echo '<img class="card-img-top" src="../images/' . $recipe['recImage'] .'.jpg" alt="Carbonara">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">' . $recipe['recName'] . '</h4>';
            echo '<p class="card-text">' . $recipe['recIngredients'] . '</p>';
            echo '<a href="details.php?idRecipes=' . $recipe['idRecipes'] . '"class="btn btn-primary">Détails</a>';
            echo '</div>';
            echo '</div>';
        } 
        ?>