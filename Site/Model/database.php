<?php
/**
 * Auteur : Vitor Silva & Ricardo Delgado
 * Date : 05.10.2020
 * Description : Page pour se connecter à la base de données
 */


/**
 * Code repris du cours module 151 fil-rouge
 */

 include('config.php');

class Database {

    // Variable de classe
    private $connector;

    /**
     * Connexion à la base de données
     *
     * @return void
     */
    public function __construct() {

        $user = $GLOBALS["CONFIG"]["database"]["userName"];
        $pass = $GLOBALS["CONFIG"]["database"]["password"];
        $dbname = $GLOBALS["CONFIG"]["database"]["dbName"];
        $host = $GLOBALS["CONFIG"]["database"]["host"];
        $port = $GLOBALS["CONFIG"]["database"]["port"];
        $charset = $GLOBALS["CONFIG"]["database"]["charset"];

        try {
            $this->connector = NEW PDO(
                'mysql:host=' . $host .';port=' . $port . ';dbname=' . $dbname .
                ';charset=' . $charset, $user, $pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            echo 'Cheeh !! Connexion échouée';
        }
    }


    protected function queryPrepareExecute($query, $binds) {
        $req = $this->connector->prepare($query);

        if($binds != null) {
            foreach($binds as $bind) {
                $req->bindValue($bind['ref'], $bind['var'], $bind['type']);
            }
        }

        $req->execute();

        return $req;
    }

    protected function unsetData($req) {
        
    }

    protected function formData($req) {
        $recipes = $req->fetchAll(PDO::FETCH_ASSOC);

        return $recipes;
    }



}
?>