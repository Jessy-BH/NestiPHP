<?php
include('app/model/Utilisateurs.php');
$model = new Utilisateurs ();
$utilisateurs = $model -> readall(); 

var_dump($utilisateurs);
?>