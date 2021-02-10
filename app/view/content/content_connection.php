<div id="login">
    <img src="public/images/logo-nesti.png" alt="logo nesti" class="logo">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form method="POST" action="<?= BASE_URL . "connection/traitement" ?>" id="login-form" class="form">
                        <h3 class="text-center text-info text-dark mb-4">Connexion</h3>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 ml-4"></div>
                                <div class="col-sm-6"><label for="username" class="text-info text-dark">Identifiant</label></div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-1 d-flex justify-content-end align-items-center"><img src="public/images/identifiant-icon.png" alt="logo identifiant" width="20px" height="20px"></div>
                                <div class="col-sm-6"><input type="text" name="Pseudo" id="username" class="form-control"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-6"><label for="password" class="text-info text-dark d-flex justify-content-center">Mot de passe</label></div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-1 d-flex justify-content-end align-items-center"><img src="public/images/mdp-icon.png" alt="logo identifiant" width="20px" height="20px"></div>
                                <div class="col-sm-6"><input type="text" name="id" id="password" class="form-control"></div>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <input type="submit" name="connection" class="btn btn-info btn-md text-dark" value="Valider">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>