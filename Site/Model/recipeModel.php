<?php
/**
 * Auteur : Vitor Silva & Ricardo Delgado
 * Date : 05.10.2020
 * Description : Page pour se connecter à la base de données
 */


/**
 * Code repris du cours module 151 fil-rouge
 */


 include_once('database.php');
 

 /**
  * FIXME: Class RecipeModel existe déjà selon code erreur et ne peut pas être instanciée
  */
class RecipeModel extends Database {

    private function queryPrepareExecute($query, $binds) {
        $connector = new DataBase();
        $req = $connector->prepare($query);

        if($binds != null) {
            foreach($binds as $bind) {
                $req->bindValue($bind['ref'], $bind['var'], $bind['type']);
            }
        }

        $req->execute();

        return $req;
    }

    private function unsetData($req) {
        
    }

    private function formData($req) {
        $recipes = $req->fetchAll(PDO::FETCH_ASSOC);

        return $recipes;
    }

    public function getAllRecipes() {
        $query = "SELECT * FROM t_recipes";

        $req = $this->queryPrepareExecute($query, null);

        $recipes = $this->formData($req);

        return $recipes;
    }

    public function getOneRecipe($id) {
        $query = "SELECT * FROM t_recipes WHERE idRecipes = $id";

        $req = $this->queryPrepareExecute($query, null);

        $recipes = $this->formData($req);

        return $recipes;
    }

    public function addRecipe($recName, $recIngredients, $recPreparation, $recTime, $recDifficulty, $recRegion, $recImage) {
        $query = "INSERT INTO t_recipes (recName, recIngredients, recPreparation, recTime, recDifficulty, recRegion, recImage) VALUE (:recName, :recIngredients, :recPreparation, :recTime, :recDifficulty, :recRegion, :recImage)";
        
        $values = array(
            1 => array(
                'ref' => ':recName',
                'var' => $recName,
                'type' => PDO::PARAM_STR
            ),
            2 =>  array(
                'ref' => ':recIngredients',
                'var' => $recIngredients,
                'type' => PDO::PARAM_STR
            ),
            3 =>  array(
                'ref' => ':recPreparation',
                'var' => $recPreparation,
                'type' => PDO::PARAM_STR
            ),
            4 =>  array(
                'ref' => ':recTime',
                'var' => $recTime,
                'type' => PDO::PARAM_INT
            ),
            5 =>  array(
                'ref' => ':recDifficulty',
                'var' => $recDifficulty,
                'type' => PDO::PARAM_INT
            ),
            6 =>  array(
                'ref' => ':recRegion',
                'var' => $recRegion,
                'type' => PDO::PARAM_STR
            ),
            7 =>  array(
                'ref' => ':recImage',
                'var' => $recImage,
                'type' => PDO::PARAM_STR
            ),
        );

        $req = $this->queryPrepareExecute($query, $values);

        $this->unsetData($req);
    }

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

    public function getLatestRecipes() {
        $query = "SELECT * FROM t_recipes ORDER BY IdRecettes DESC LIMIT 5";

        $req = $this->queryPrepareExecute($query, null);

        $recipes = $this->formData($req);

        return $recipes;
    }
}
?>