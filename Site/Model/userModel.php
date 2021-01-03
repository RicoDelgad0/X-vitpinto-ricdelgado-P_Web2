<?php
/**
 * Auteur : Vitor Silva & Ricardo Delgado
 * Date : 02.01.21
 * Description : Modèle gèrant la création et l'utilisation des utilisateurs
 */

include_once('database.php');

class UserModel extends Database {

    /**
     * Création d'utilisateur dans la DB
     */
    public function createUser($useNickName, $usePassword) {
        $query = "INSERT INTO t_user (useNickName, usePassword) VALUE (:useNickName, :usePassword)";
        
        $values = array (
            1 => array(
                'ref' => ':useNickName',
                'var' => $useNickName,
                'type' => PDO::PARAM_STR
            ),
            2 => array(
                'ref' => ':usePassword',
                'var' => $usePassword,
                'type' => PDO::PARAM_STR
            ),
        );

        $req = $this->queryPrepareExecute($query, $values);

        $this->unsetData($req);
    }

    /**
     * Récupération utilisateur dans DB
     */
    public function userLogin($userName) {
        $query = "SELECT * FROM t_user WHERE useNickName = '$userName'";

        $req = $this->queryPrepareExecute($query, null);

        $user = $this->formData($req);

        return $user;
    }

    /**
     * Récupération tous les utilisateurs DB
     */
    public function allUsers() {
        $query = "SELECT * FROM t_user";

        $req = $this->queryPrepareExecute($query, null);

        $users = $this->formData($req);

        return $users;
    }
}

?>