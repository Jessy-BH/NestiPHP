<div class="container bg-white d-flex flex-column align-items-left" id="recettes">
  <h1 class="mb-2 mt-4">Recettes</h1>
  <div class="d-flex flex-row justify-content-between">
    <nav class="navbar navbar-white bg-white pl-0">
      <form class="form-inline">
        <input class="form-control mr-sm-2" id="customSearch" type="search" placeholder="Search" aria-label="Search">
        <img id="searchRecipe" src="<?php BASE_URL ?>public/images/search.png" alt="">
      </form>
    </nav>
    <div>
      <a href="<?php BASE_URL ?>index.php?loc=recipes&action=creation" class="btn mb-1 border align-self-end"> <img id="ajouter" src="<?php BASE_URL ?>public/images/add.png" alt="" width="20px" height="20px"> Ajouter</a>
    </div>
  </div>

  <tbody>
    <table class="table">
      <thead>
        <tr class="bg-info text-white">
          <th scope="col">ID</th>
          <th scope="col">Nom</th>
          <th scope="col">Difficulté</th>
          <th scope="col">Pour</th>
          <th scope="col">Temps</th>
          <th scope="col">Chef</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>

      <?php
      foreach ($arrayRecipes as $value) {
      ?>
        <tr>
          <th scope="row"><?= $value->getId(); ?></th>
          <td><?= $value->getId(); ?></td>
          <td><?= $value->getId(); ?></td>
          <td><?= $value->getId(); ?></td>
          <td><?= $value->getId(); ?></td>
          <td><?= $value->getId(); ?></td>
          <td><a href="<?= BASE_URL ?>index.php?loc=recipes&action=editing">Modifier</a><br>
            <a href="">Supprimer</a>

          </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </tbody>
</div>