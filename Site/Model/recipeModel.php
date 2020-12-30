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
 

class RecipeModel extends Database {

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

    public function addRecipe($recName, $recIngredients, $recPreparation, $recTime, $recDifficulty, $recRegion, $recImage, $idUser) {
        $query = "INSERT INTO t_recipes (recName, recIngredients, recPreparation, recTime, recDifficulty, recRegion, recImage, idUser) VALUE (:recName, :recIngredients, :recPreparation, :recTime, :recDifficulty, :recRegion, :recImage, :idUser)";
        
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
            8 => array(
                'ref' => ':idUser',
                'var' => $idUser,
                'type' => PDO::PARAM_STR
            ),
        );

        $req = $this->queryPrepareExecute($query, $values);

        $this->unsetData($req);
    }

    public function getLatestRecipes() {
        $query = "SELECT * FROM t_recipes ORDER BY IdRecipes DESC LIMIT 4";

        $req = $this->queryPrepareExecute($query, null);

        $recipes = $this->formData($req);

        return $recipes;
    }
}
?>