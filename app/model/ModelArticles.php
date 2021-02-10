<?php
include_once(PATH_MODEL.'Connection.php');
class ModelArticles {
   
    public function readAll() {
        //requete
        $pdo= Connection::getPdo();

        $sql="SELECT idArticle as id, unitQuantity as unitQuantity, flag as flag, dateCreation as dateCreation, dateModification as dateModification,idImage as idImage,idUnit as idUnit,idProduct as idProduct FROM article";
        $result=$pdo->query($sql);
        if($result){
            $array = $result-> fetchAll(PDO::FETCH_CLASS,'Articles');
        } else{
            $array=[];
        }
        return $array;
    }


}