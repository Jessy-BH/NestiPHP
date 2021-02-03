
<?php

switch ($loc) {
  case 'recettes':

    switch ($action) {
      case 'edit':
        include('app/view/content_recettes_edition.php');
        break;
      case 'creation':
        include('app/view/content_recettes_creation.php');
        break;

      default:
        include('app/view/content_recettes.php');
        break;
    }
    break;

  case 'articles':

    switch ($action) {
      case 'cmd':
        include('app/view/content_articles_cmd.php');
        break;
      case 'import':
        include('app/view/content_articles_import.php');
        break;
      case 'edit':
        include('app/view/content_articles_edit.php');
        break;
      default:
        include('app/view/content_articles.php');
        break;
    }
    break;

  case 'utilisateurs':

    switch ($action) {
      case 'edit':
        include('app/view/content_utilisateurs_edition.php');
        break;
      case 'creation':
        include('app/view/content_utilisateurs_creation.php');
        break;
      default:
        include('app/view/content_utilisateurs.php');
        break;
    }
    break;

  case 'stats':
    include('app/view/content_stats.php');
    break;

  case 'deco':

    break;
  default:
    include("app/controller/index.php");
    break;
}

?>
