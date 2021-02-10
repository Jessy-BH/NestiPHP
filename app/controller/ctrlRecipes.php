<?php

include('app/model/ModelRecipes.php');
include('entity/Recipes.php');
$model = new ModelRecipes ();
$arrayRecipes = $model -> readAll(); 

 
//die();

// $recettes = new ModelRecettes();
// $Recette->setName('Crêpes');
// $recettes->sedId(1);

// $recettes2 = new ModelRecettes();
// $Recette2->setName('Gateau');
// $recettes2->sedId(1);


// $arrayRecettes=[$recette,$recette2,$recette,$recette,$recette];
?>