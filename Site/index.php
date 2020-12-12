<?php
/*
Auteur : Vitor Silva & Ricardo Delgado Miranda
Date : 11.12.2020
Description : Page index du Site
*/


/**
 * Inclusion des divers controlleurs
 */
include_once('controller/MasterController.php');
include_once('controller/HomeController.php');
include_once('controller/RecipeController.php');
include_once('controller/UserController.php');

class MainController {
    
    /**
     * Séléction du bon controlleur et de l'action
     */
    public function dispatch() {

        if(!isset($_GET['controller'])) {
            $_GET['controller'] = 'home';
            $_GET['action'] = 'lastRecipes';
        }

        $currentLink = $this->menuSelected($_GET['controller']);
        $this->viewBuild($currentLink);
    }


    /**
     * Séléction de page et instanciation du controlleur
     */
    protected function menuSelected() {

        switch($_GET['controller']) {
            case 'home':
                $link = new HomeController();
                break;
            case 'recipes':
                $link = new RecipeController();
                break;
            case 'login':
                $link = new UserController();
                break;
            case 'register':
                $link = new UserController();
                break;
            default:
                $link = new HomeController();
                break; 
        }

        return $link;
    }

    /**
     * Fonction qui défini la construction de la page
     */
    protected function viewBuild($currentPage) {

        $content = $currentPage->display();

        include(dirname(__FILE__) . '/View/head.html');
        include(dirname(__FILE__) . '/View/menu.html');
        echo $content;
        include(dirname(__FILE__) . '/View/footer.html');
    }
}

/**
 * Appel du controlleur par défaut et affiche première page
 */
$controller = new MainController();
$controller->dispatch();
