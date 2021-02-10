<?php

session_start();
include 'app/config.php';
include 'app/model/Database.php';
require_once __DIR__ . "/app/tools/SiteUtil.php";
$loc    = filter_input(INPUT_GET, "loc", FILTER_SANITIZE_STRING);
$action = filter_input(INPUT_GET, "action");

if($loc==null){
  $loc="connection";
}

switch ($loc) {

  case 'connection':
    include(PATH_CTRL . "/ctrlConnection.php");
    break;
  case 'recipes':
    include(PATH_CTRL . '/ctrlRecipes.php');
    break;
  case 'articles':
    include(PATH_CTRL . '/ctrlArticles.php');
    break;
  case 'users':
    include(PATH_CTRL . '/ctrlUsers.php');
    break;
  case 'statistics':
    include(PATH_CTRL . '/ctrlStatistics.php');
    break;
  case 'deconnection':
    header('location:' . BASE_URL . "index.php?loc=deconnection");
    $a = new Database();
    $a->deco();
    break;
  default:
    echo ("404");

    break;
}

include 'app/view/common/template.php';
