<?php

include_once('database.php');


class UserModel extends Database {

    public function createUser($useNickName, $useAdmin, $usePassword) {
        $query = "INSERT INTO t_user (useNickName, useAdmin, usePassword) VALUE (:useNickName, :useAdmin, :usePassword)";
        
        $values = array (
            1 => array(
                'ref' => ':useNickName',
                'var' => $useNickName,
                'type' => PDO::PARAM_STR
            ),
            2 => array(
                'ref' => ':useAdmin',
                'var' => $useAdmin,
                'type' => PDO::PARAM_INT
            ),
            3 => array(
                'ref' => ':usePassword',
                'var' => $usePassword,
                'type' => PDO::PARAM_STR
            ),
        );

        $req = $this->queryPrepareExecute($query, $values);

        $this->unsetData($req);
    }
}

?>