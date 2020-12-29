<?php

include_once('database.php');


class UserModel extends Database {

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

    public function userLogin($userName) {
        $query = "SELECT * FROM t_user WHERE useNickName = '$userName'";

        $req = $this->queryPrepareExecute($query, null);

        $user = $this->formData($req);

        return $user;
    }

    public function allUsers() {
        $query = "SELECT * FROM t_user";

        $req = $this->queryPrepareExecute($query, null);

        $users = $this->formData($req);

        return $users;
    }
}

?>