<?php
include('app/model/Articles.php');
$model = new Articles ();
$articles = $model -> readall(); 

var_dump($articles);
?>