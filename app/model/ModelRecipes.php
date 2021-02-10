<?php
include_once(PATH_MODEL.'Connection.php');
class ModelRecipes {
   
    public function readAll() {
        //requete
        $pdo= Connection::getPdo();

        $sql="SELECT idRecipe as id, dateCreation as dateCreation, name as name, difficulty as difficulty, portions as portions, flag as flag, preparationTime as time,idChef as chief,idImage as image FROM recipe";
        $result=$pdo->query($sql);
        if($result){
            $array = $result-> fetchAll(PDO::FETCH_CLASS,'Recipes');
        } else{
            $array=[];
        }
        return $array;
    }





}