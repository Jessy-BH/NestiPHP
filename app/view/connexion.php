<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/connexion.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Connexion Nesti</title>
</head>

<body>
    <div id="login">
        <img src="../../public/images/logo-nesti.png" alt="logo nesti" class="p-5">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info text-dark mb-4">Connexion</h3>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3 ml-4"></div>
                                    <div class="col-sm-6"><label for="username" class="text-info text-dark">Identifiant</label></div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-1 d-flex justify-content-end align-items-center"><img src="../../public/images/identifiant-icon.png" alt="logo identifiant" width="20px" height="20px"></div>
                                    <div class="col-sm-6"><input type="text" name="username" id="username" class="form-control"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-6"><label for="password" class="text-info text-dark d-flex justify-content-center">Mot de passe</label></div>
                                </div>

                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-1 d-flex justify-content-end align-items-center"><img src="../../public/images/mdp-icon.png" alt="logo identifiant" width="20px" height="20px"></div>
                                    <div class="col-sm-6"><input type="text" name="password" id="password" class="form-control"></div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <input type="submit" name="submit" class="btn btn-info btn-md text-dark" value="Valider">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>