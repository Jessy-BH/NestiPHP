<?php
include('app/model/Recettes.php');
$model = new Recettes ();
$recettes = $model -> readall(); 

var_dump($recettes);
?>