
<table class="table">
<thead>
  <tr class="bg-info text-white">
    <th scope="col">ID</th>
    <th scope="col">Nom</th>
    <th scope="col">Rôle</th>
    <th scope="col">Derniere connexion</th>
    <th scope="col">Etat</th>
    <th scope="col">Actions</th>
  </tr>


<?php
foreach($arrayUsers as $value){


?>

  <tr>
    <th scope="row"><?=$value->getId();?></th>
    <td><?=$value->getLastname();?></td>
    <td><?=$value->getLastname();?></td>
    <td><?=$value->getLastname();?></td>
    <td><?=$value->getLastname();?></td>
    <td><a href="<?=BASE_URL?>index.php?loc=users&action=editing">Modifier</a><br>
    <a href="">Supprimer</a>
    
  </td>
  </tr>
  <?php
}

  ?>
 </table>
</tbody>


<!-- <form>
    <tr>
        <th class="row">
            Nom : <input class="col" type="text" name="name" id="name" required><br>

            Prénom : <input class="col" type="text" name="fname" id="fname" required><br>

            Rôle : <input class="col" type="number" name="age" id="age" min="18" max="125" required>


            Etat : <input class="col" type="text" name="login" id="login" required>
        </th>
    </tr>

    <tr>
        <th class="col">
            Mot de passe : <input type="password" name="pwd" id="pwd" required>
            &nbsp;Complexité du mot de passe : <meter value="0" low="3" high="5" min="0" max="5" id="pwd_meter">0%</meter><br>

            <ul>
                <li><span class="advice" id="pwd_warn1">Le mot de passe doit faire plus de 8 caractères.</span></li>
                <li><span class="advice" id="pwd_warn2">Le mot de passe doit contenir au moins une lettre minuscule.</span></li>
                <li><span class="advice" id="pwd_warn3">Le mot de passe doit contenir au moins une lettre majuscule.</span></li>
                <li><span class="advice" id="pwd_warn4">Le mot de passe doit contenir au moins un chiffre.</span></li>
                <li><span class="advice" id="pwd_warn5">Le mot de passe doit contenir au moins un caractère non-alphanumérique.</span></li>
            </ul><br>
        </th>
    
</form> -->


