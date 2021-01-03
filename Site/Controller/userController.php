<?php
/**
 * Auteur : Vitor Silva & Ricardo Delgado
 * Date : 20.12.2020
 * Description : Controller qui gère la création de compte
 */

include_once('/Model/userModel.php');

class UserController extends MasterController {
    
    public function display() {
        
        $action = $_GET['action'] . "Action";

        return call_user_func(array($this, $action));
    }

    /**
     * Affiche page d'enregistrement
     */
    private function registerFormAction() {

        $view = file_get_contents('view/page/home/registerForm.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    /**
     * Affiche page de connexion
     */
    private function loginFormAction() {

        $view = file_get_contents('view/page/user/loginForm.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    /**
     * Fonction anti injection code
     */
    private function testInput($data) {
        $data = stripslashes($data);
        $data = trim($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    /**
     * validation de données + création utilisateur
     */
    private function userRegisterAction() {
        $user = new userModel();

        /**
         * Variables vérifications bon déroulement validation données
         * Utilisation de int car problème avec bool
         */
        $userNameOK = 0;
        $passwordOK = 0;

        // Stock le message d'erreur s'il doit y en avoir un
        $userNameFail = $passwordFail = "";

            // Vérification du champs pour l'username
            if(empty($_POST['userName'])) {
                $userNameFail = "Veuillez saisir un nom d'utilisateur";
            } else {
                $userName = $this->testInput($_POST['userName']);
                if(!preg_match("/^[a-zA-Z0-9é -']*$/", $userName)) {
                    $userNameFail = "Caractère spéciaux non accepté dans le nom d'utilisateur";
                } else {
                    $userNameOK = 1;
                }
            }
            
            // Vérification du champ pour le mot de passe et la confirmation
            if(empty($_POST['password']) || empty($_POST['confirmPassword'])) {
                $passwordFail = 'Veuillez saisir un mot de passe';
            } else {
                $password = $this->testInput($_POST['password']);
                $confirmPassword = $this->testInput($_POST['confirmPassword']);
                if($password != $confirmPassword) {
                    $passwordFail = "Les mots de passe ne correspondent pas";
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $passwordOK = 1;
                }
            }

            $errors = array($userNameFail, $passwordFail);

            // Si tout est bon, affiche message de réussite sinon affiche erreurs
            if($userNameOK && $passwordOK == 1) {
                $user->createUSer($userName, $password);
                $view = file_get_contents('view/page/user/registerSuccess.php');

                ob_start();
                eval('?>' . $view);
                $content = ob_get_clean();

                return $content;
            } else {
                $view = file_get_contents('view/page/user/fail.php');

                ob_start();
                eval('?>' . $view);
                $content = ob_get_clean();

                return $content;
            }
    }

    /**
     * Connexion au site
     */
    private function userLoginAction() {
        $user = new UserModel();

        // Variables stockage username + password
        $username = $password = "";
        // Variables stockage erreurs
        $usernameFail = $passwordFail = "";
        // Variables vérification 
        $usernameOK = $passwordOK = $loginOK = $missingUsername = $missingPassword = 0;

        // Vérifie champ utilisateur vide ou pas
        if(empty($_POST['userName'])) {
            $missingUsername = 1; // vide
        } else {
            $username = $this->testInput($_POST['userName']);
            $usernameOK = 1; // pas vide
        }

        // Vérifie si mot de passe vide ou pas
        if(empty($_POST['password'])) {
            $missingPassword = 1; // Vide
        } else {
            $password = $this->testInput($_POST['password']);
            $passwordOK = 1; // pas vide
        }

        // Véridie que l'utilisateur existe dans la DB
        if($usernameOK && $passwordOK == 1 || $missingUsername == 1 || $missingPassword == 1) {
            $users = $user->allUsers();
            foreach($users as $key => $value) {
                foreach($value as $key => $value) {
                    if($username == $value) {
                        $useOK = 1; // utilisateur existe
                    }
                }
            }

            // Vérifie mot de passe
            if($useOK = 1) {
                $login = $user->userLogin($username);
                if (password_verify($password, $login[0]['usePassword'])) {
                    $this->loginOK = 1; // mot de passe correcte
                } else {
                    $passwordFail = 'Identifiant ou mot de passe éronné';
                }
            } else {
                $passwordFail = 'Identifiant ou mot de passe éronné';
            }

            $errors = array($usernameFail, $passwordFail); // tableaux d'erreurs

            // Si la connexion peut se faire
            if($loginOK = 1) {
                // Si une session existe
                if(isset($_SESSION)) {
                    session_destroy();
                    session_start();
                } else {
                    session_start();
                }
                // Variables de session
                $_SESSION['useAdmin'] = $login[0]['useAdmin'];
                $_SESSION['idUser'] = $login[0]['idUser'];
                $_SESSION['loggedin'] = true;
                
                $view = file_get_contents('view/page/user/loginSuccess.php');

                ob_start();
                eval('?>' . $view);
                $content = ob_get_clean();

                return $content;
            } else {
                $view = file_get_contents('view/page/user/fail.php');

                ob_start();
                eval('?>' . $view);
                $content = ob_get_clean();

                return $content;
            }
        }
    }

    /**
     * Détruit la session et les variables de session
     */
    private function logoutAction() {
        session_destroy();
        $_SESSION = array();

        // Renvoie sur la page principale directement
        header("refresh:0; url=index.php?controller=home&action=lastRecipes");
    }
}
?>