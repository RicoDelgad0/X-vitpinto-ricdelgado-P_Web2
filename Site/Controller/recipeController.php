<?php

include_once 'Model/recipeModel.php';

class RecipeController extends MasterController {

    public function display() {

        $action = $_GET['action'] . "Action";

        return call_user_func(array($this, $action));
    }

    private function allRecipesAction() {

        $recipeList = new recipeModel();
        $recipes = $recipeList->getAllRecipes();

        $view = file_get_contents('/View/page/recipes/list.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    private function oneRecipeAction() {

        $recipeList = new recipeModel();
        $recipe = $recipeList->getOneRecipe($_GET['id']);

        $view = file_get_contents('/View/page/recipes/detail.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

}
?>