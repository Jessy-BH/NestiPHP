
<?php

switch ($loc) {
  case 'recettes':

    switch ($action) {
      case 'edit':
        include(PATH_CONTENT.'/content_recettes_edition.php');
        break;
      case 'creation':
        include(PATH_CONTENT.'/content_recettes_creation.php');
        break;

      default:
        include(PATH_CONTENT.'/content_recettes.php');
        break;
    }
    break;

  case 'articles':

    switch ($action) {
      case 'cmd':
        include(PATH_CONTENT.'/content_articles_cmd.php');
        break;
      case 'import':
        include(PATH_CONTENT.'/content_articles_import.php');
        break;
      case 'edit':
        include(PATH_CONTENT.'/content_articles_edit.php');
        break;
      default:
        include(PATH_CONTENT.'/content_articles.php');
        break;
    }
    break;

  case 'utilisateurs':

    switch ($action) {
      case 'edit':
        include(PATH_CONTENT.'/content_utilisateurs_edition.php');
        break;
      case 'creation':
        include(PATH_CONTENT.'/content_utilisateurs_creation.php');
        break;
      default:
        include(PATH_CONTENT.'/content_utilisateurs.php');
        break;
    }
    break;

  case 'stats':
    include(PATH_CONTENT.'/content_stats.php');
    break;

  case 'deco':

    break;
  default:
    include(PATH_CTRL.'/index.php');
    break;
}

?>
