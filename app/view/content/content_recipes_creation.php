<div class="container bg-white d-flex flex-column align-items-left" id="recettes">
    <div class="row mt-3">
        <div class="col">
            <h1 class="mb-2 mt-4">Création d'une recette</h1>
            <p>Nom de la recette</p>
            <input type="text" class="w-100">
            <p>Auteur de la recette</p>
            <div class="row">
                <div class="col d-flex justify-content-between flex-column">
                    <p class="mt-2 mb-2">Difficulté (note sur 5)</p>
                    <p class="mt-2 mb-2">Nombre de personnes</p>
                    <p class="mt-2 mb-2">Temps de préparation en minutes</p>
                </div>
                <div class="col">
                    <div class="col d-flex justify-content-between flex-column p-0">
                        <div class="d-flex justify-content-end"><input type="text" class="w-25 mt-2 mb-2"></div>
                        <div class="d-flex justify-content-end"><input type="text" class="w-25 mt-2 mb-2"></div>
                        <div class="d-flex justify-content-end"><input type="text" class="w-25 mt-2 mb-2"></div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center p-2">
                <button type="submit" class="btn m-2 valid w-25">Valider</button>
                <button type="submit" class="btn m-2 cancel w-25">Annuler</button>
            </div>
        </div>
        <div class="col">
            <div class="h-75" id="imgCtn" style="background-color: lightgray;">
                
            </div>
            <p>Télécharger une nouvelle image</p>
            <div class="row">
                <div class="col d-flex align-items-center"><input type="text" id="imgDl" class="w-100 h-100"></div>
                <div class="col-sm-2"><button type="submit" class="btn valid w-100" onclick="dlImg()">Ok</button></div>
            </div>
        </div>
    </div>

    <div class="recipeCtn h-100">

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col">
                        <h2>Préparations</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1 mt-2 mb-2">
                        <button class="upText btn mt-2 mb-2 d-flex justify-content-center"><img src="<?php BASE_URL ?>public/images/up-arrow.png" alt=""></button>
                        <button class="downText btn mt-2 mb-2 d-flex justify-content-center"><img src="<?php BASE_URL ?>public/images/down-arrow.png" alt=""></button>
                        <button class="deleteText btn mt-2 mb-2 d-flex justify-content-center"><img src="<?php BASE_URL ?>public/images/delete.png" alt=""></button>
                    </div>
                    <div class="col"><textarea class="w-100 h-100 mt-2 mb-2"></textarea></div>
                </div>

                <div class="row mt-4 h-50">
                    <div class="col-sm-1"></div>
                    <div class="col"><button class="btn w-100 h-25"><img src="<?php BASE_URL ?>public/images/addinput.png" alt=""></button></div>
                </div>

            </div>
            <div class="col-sm-4">

                <h2>Liste des ingrédients</h2>
                <div class="ingredientsCtn" id="ingCtn">

                </div>
                <p class="mt-2 mb-2">Ajouter un ingrédient</p>
                <input type="text" id="ingName" class="mb-2 w-100" style="height: 38px;">
                <div class="row">
                    <div class="col-md-5"><input type="text" id="ingQty" class="w-100 h-100"></div>
                    <div class="col-md-5"><input type="text" id="ingUnit" class="w-100 h-100"></div>
                    <div class="col-md-2 d-flex justify-content-end"><button type="submit" class="btn valid">Ok</button></div>
                </div>
            </div>
        </div>
    </div>
</div>