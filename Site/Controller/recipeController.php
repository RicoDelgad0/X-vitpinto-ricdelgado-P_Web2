<?php

include_once 'Model/recipeModel.php';

class RecipeController extends MasterController {

    public function display() {

        $action = $_GET['action'] . "Action";

        return call_user_func(array($this, $action));
    }

    private function allRecipesAction() {

        $recipeList = new recipeModel();
        $allRecipes = $recipeList->getAllRecipes();

        $view = file_get_contents('View/page/recipes/list.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    private function oneRecipeAction() {

        $recipeList = new recipeModel();
        $recipe = $recipeList->getOneRecipe($_GET['idRecipes']);

        $view = file_get_contents('View/page/recipes/detail.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    private function addRecipeAction() {

        $recipeList = new recipeModel();

        // VALIDATION DE DONNéES
        $recName = $_POST['recName'];
        $recIngredients = $_POST['recIngredient'];
        $recPreparation = $_POST['recPreparation'];
        $recTime = $_POST['recTime'];
        $recDifficulty = $_POST['recDifficulty'];
        $recRegion = $_POST['recRegion'];
        $recImage = $_POST['recImage'];
        $idUser = 3;

        $recipeList->addRecipe($recName, $recIngredients, $recPreparation, $recTime, $recDifficulty, $recRegion, $recImage, $idUser);

        // pas de contenu affichable ici (on ajoute juste une recette)
    }
}
?>