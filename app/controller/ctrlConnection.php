<?php
if($action=="traitement"){ 
$Pseudo = $_POST["Pseudo"];
$id = $_POST["id"];
$_SESSION["Pseudo"] = $Pseudo;
$_SESSION["id"]     = $id;
$_SESSION["firstname"]="yann";
$_SESSION["lastname"]="Del";

var_dump($loc);
if ($loc != "connection") {
    echo("no connectionXXX");
    if ((($_SESSION["Pseudo"]!="yop")) | (($_SESSION["id"]!=1))) {
     header("index.php?loc=connection");
     echo("no connected");
     die();
    }else{
        $loc="recipes";
    }
}else{
    echo("connection XXX");
    var_dump($_SESSION["Pseudo"]);
    var_dump($_SESSION["id"]);
    $loc="recipes";
    $action="";
        
    }
}


?>