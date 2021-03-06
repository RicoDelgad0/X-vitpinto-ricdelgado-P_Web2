<?php
/**
 * Auteur : Vitor Silva & Ricardo Delgado
 * Date : 02.01.21
 * Description : Controleur lié aux recettes
 */

include_once 'Model/recipeModel.php';

class RecipeController extends MasterController {

    public function display() {

        $action = $_GET['action'] . "Action";

        return call_user_func(array($this, $action));
    }

    /**
     * Prend toutes les recettes et affiche la bonne page
     */
    private function allRecipesAction() {

        $recipeList = new recipeModel();
        $allRecipes = $recipeList->getAllRecipes();
        

        $view = file_get_contents('View/page/recipes/list.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    /**
     * Prend une seul recette et affiche la bonne page
     */
    private function oneRecipeAction() {

        $recipeList = new recipeModel();
        $recipe = $recipeList->getOneRecipe($_GET['idRecipes']);

        $view = file_get_contents('View/page/recipes/detail.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    /**
     * Prend les valeurs et ajoute une recette à la Db
     */
    private function addRecipeAction() {

        $recipeList = new recipeModel();

        $recName = $_POST['recName'];
        $recIngredients = $_POST['recIngredient'];
        $recPreparation = $_POST['recPreparation'];
        $recTime = $_POST['recTime'];
        $recDifficulty = $_POST['recDifficulty'];
        $recRegion = $_POST['recRegion'];
        $recImage = $_POST['recImage'];
        $idUser = $_SESSION['idUser'];

        $recipeList->addRecipe($recName, $recIngredients, $recPreparation, $recTime, $recDifficulty, $recRegion, $recImage, $idUser);

        header("refresh:0; url=index.php?controller=home&action=lastRecipes");
        // pas de contenu affichable ici (on ajoute juste une recette)
    }
}
?>