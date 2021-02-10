<?php

include('app/model/ModelUsers.php');
include('entity/Users.php');
$model = new ModelUsers ();
$arrayUsers = $model -> readall(); 

?>