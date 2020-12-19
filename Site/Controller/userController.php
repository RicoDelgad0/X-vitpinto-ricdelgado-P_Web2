<?php


include_once('/Model/userModel.php');

class UserController extends MasterController {
    
    public function display() {
        
        $action = $_GET['action'] . "Action";

        return call_user_func(array($this, $action));
    }

    private function registerFormAction() {

        $view = file_get_contents('view/page/home/registerForm.php');

        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        return $content;
    }

    private function userRegisterAction() {
        $user = new userModel();

        $userNameOK = $passwordOK = false;
        $userNameFail = $passwordFail = "";

            if(empty($_POST['userName'])) {
                $userNameFail = 'Champ "Username" requis !';
            } else {
                $userName = trim($_POST['userName']);
                $userName = stripslashes($userName);
                $userName = htmlspecialchars($userName);
                if(!preg_match("/^[a-zA-Z0-9é -']*$/", $userName)) {
                    $userNameFail = 'Caractère spéciaux non accepté dans le champ "Username';
                } else {
                    $userNameOK = true;
                    var_dump($userNameOK);
                }
            }
            
            if(empty($_POST['password'])) {
                $passwordFail = 'Mot de passe requis';
            } else {
                $password = trim($_POST['password']);
                $password = stripslashes($password);
                $password = htmlspecialchars($password);
                if($password != $_POST['confirmPassword']) {
                    $passwordFail = 'Les mots de passe ne correspondent pas';
                } else {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $passwordOK = true;
                    var_dump($passwordOK);
                }
            }

            $errors = array($userNameFail, $passwordFail);

            if($userNameOK & $passwordOK = true) {
                $user->createUSer($userName, $_POST['admin'], $password);
                $view = file_get_contents('view/page/user/succes.php');

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
?>
