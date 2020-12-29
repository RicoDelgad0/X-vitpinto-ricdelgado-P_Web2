<?php
include_once 'Model/recipeModel.php';

session_start();
class HomeController extends MasterController {
    
    public function display() {
        
        $action = $_GET['action'] . "Action";

        return call_user_func(array($this, $action));
    }

    private function lastRecipesAction() {
        $catchRecipes = new RecipeModel();
        $recipes = $catchRecipes->getLatestRecipes();

        $view = file_get_contents('View/page/home/lastRecipes.php');
    
        ob_start();
        eval('?>' . $view);

         $content = ob_get_clean();

         return $content;
    }

    private function contactAction() {
         
        $view = file_get_contents('view/page/home/contact.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    private function addRecipeAction() {
        if(!isset($_SESSION)) {
            echo 'it works';
        } else if($_SESSION['useAdmin'] == 1) {
            echo 'je m affiche';
        }
        /*
        if($_SESSION['useAdmin'] == 1) {
            $view = file_get_contents('view/page/home/addRecipe.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
        } else {
            echo 'oupsi';
        }*/
    }

    private function registerFormAction() {

        $view = file_get_contents('view/page/home/registerForm.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }
}
?>