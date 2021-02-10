<!DOCTYPE html>
<html lang="fr">

<head>

  <?php 

  include('head.php'); ?>


</head>

<body>

    <?php

    include('header.php');
    if ($loc != "connection") {
      include('navigation.php');
    }

    include('././app/controller/ctrlContent.php');
   
    ?>


</body>

</html>