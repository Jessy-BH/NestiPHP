<?php

if ($loc != "connection") {
  if ((($_SESSION["Pseudo"]!="yop")) | (($_SESSION["id"]!=1))) {
   header("index.php?loc=connection");
   echo("no connected");
   die();
  }}else{
      header("index.php");
  }
  ?>