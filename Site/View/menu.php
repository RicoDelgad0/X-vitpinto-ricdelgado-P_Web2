<?php
/**
 * Auteur: Vitor Silva & Ricardo Delgado
 * Date: 11.12.2020
 * Description: Menu présent dans chaque page du site
 */

// Barre de navigation
echo '<nav class="navigation sticky-top py-1">';
echo '<div class="container d-flex flex-md-row justify-content-between">';
echo '<a class="wlink py-2 d-none d-md-inline-block" href="index.php?controller=home&action=lastRecipes">Page d accueil</a>';
echo '<a class="wlink py-2 d-none d-md-inline-block" href="index.php?controller=recipes&action=allRecipes">Recettes</a>';
echo '<a class="wlink py-2 d-none d-md-inline-block" href="index.php?controller=home&action=contact">Contact</a>';

// Affiche Ajout recettes si Session lancée et user admin, puis affiche logout si user connecté
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true && $_SESSION['useAdmin'] == 1) {
    echo '<a class="wlink py-2 d-none d-md-inline-block" href="index.php?controller=home&action=addRecipe">Ajouter une recette</a>';
    echo '<a class="wlink py-2 d-none d-md-inline-block" href="index.php?controller=login&action=logout">Déconnexion</a>';
} else if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true && $_SESSION['useAdmin'] == 0) {
    echo '<a class="wlink py-2 d-none d-md-inline-block" href="index.php?controller=login&action=logout">Déconnexion</a>';
} else {
    echo '<a class="wlink py-2 d-none d-md-inline-block" href="index.php?controller=home&action=registerForm">S enregistrer</a>';
}
echo '</div>';
echo '</nav>';
?>