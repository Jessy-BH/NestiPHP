<?php
include_once(PATH_MODEL.'Connection.php');
class ModelUsers {

    public function readAll() {
        //requete
        $pdo= Connection::getPdo();

        $sql="SELECT idUsers AS id, lastName AS lastname, firstName AS fistname, email AS email, passwordHash AS passwordHash, flag AS flag, dateCreation AS dateCreation, login as login, address1 AS address1, address2 AS address2, zipCode AS zipCode, idcity AS idcity FROM users";
        $result=$pdo->query($sql);
        if($result){
            $array = $result-> fetchAll(PDO::FETCH_CLASS,'Users');
        } else{
            $array=[];
        }
        return $array;
    }

}