<?php

include('app/view/connexion.php');
include('app/config.php');
$loc = filter_input(INPUT_GET, "loc");
$action  = filter_input(INPUT_GET, "action");
//controlleur de session >>

//include('app/');
switch ($loc) {
  case 'recettes':
    include('app/controller/ctrl_recettes.php');
    break;
  case 'articles':
    include('app/controller/ctrl_articles.php');
    break;
  case 'utilisateurs':
    include('app/controller/ctrl_utilisateurs.php');
    break;
  case 'stat':
    include('app/controller/ctrl_stat.php');
    break;
  case 'deco':
    
    break;
  default:
    break;
}
include('app/view/template.php');
