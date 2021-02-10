<h1 class="mb-2 mt-4 ml-5">Articles</h1>

<?php

?>

<div class="container bg-white d-flex flex-column align-items-left" id="recettes">

  <table class="table">
    <thead>
      <tr class="bg-info text-white">
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prix de vente</th>
        <th scope="col">Dernière importation</th>
        <th scope="col">stock</th>
        <th scope="col">Actions</th>
      </tr>


      <?php
      foreach ($arrayArticles as $value) {


      ?>

        <tr>
          <th scope="row"><?= $value->getId(); ?></th>
          <td><?= $value->getUnitQuantity(); ?></td>
          <td><?= $value->getUnitQuantity(); ?></td>
          <td><?= $value->getUnitQuantity(); ?></td>
          <td><?= $value->getUnitQuantity(); ?></td>
          <td><a href="<?= BASE_URL ?>index.php?loc=articles&action=editing">Modifier</a><br>
            <a href="">Supprimer</a>

          </td>
        </tr>
      <?php
      }

      ?>
  </table>
  </tbody>