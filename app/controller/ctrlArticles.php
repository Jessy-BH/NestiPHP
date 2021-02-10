<?php

include('app/model/ModelArticles.php');
include('entity/Articles.php');
$model = new ModelArticles ();
$arrayArticles = $model -> readAll(); 

?>