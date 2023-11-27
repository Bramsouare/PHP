<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="alternate" href="atom.xml" type="application/atom+xml" title="Atom">
    <link rel="stylesheet" href="style.css">
    <title>accueil</title>
    <style>
        body {
            background-image: url("asset/images_the_district/fondecran.png");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        
        <?php include 'header.php';?> <!--entête-->

        <div>
            <img src="asset/images_the_district/borderau.png" class="img-fluid col-12 px-0 m-0" alt="image de tete"> <!--image-->

        </div>
        <div class="card bg-lighter d-none d-lg-block w-50 mx-auto mt-2" style="max-width: 540px;"> <!--carte-->
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="asset/images_the_district/food/cheesburger.jpg" class="card-img" alt="platCommander">
                </div>
                <div class="col-md-8">
                    <div class="card-body ">
                        <h5 class="card-title">Plats commandés</h5>
                        <p class="card-text">Quantité: <span id="quantity">0</span></p>
                        <button id="increaseQuantity" class="btn btn-primary">Augmenter la quantité</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-none d-lg-block mx-auto"> <!--formulaire version destock-->

            <form>

                <div class="form-group mt-5">

                    <label for="nomPrenom">Nom et prénom</label> <!--nom et prenom-->
                    <input type="text" class="form-control" id="nomPrenom">
                    <span id="!n_manquant"></span>
                </div>
                <div class="row mt-5"> <!--les deux élément aligner sur une ligne-->

                    <div class="form-group col-6">
                        <label for="email">Email</label> <!--email-->
                        <input type="email" class="form-control" id="email">
                        <span id="!email_manquant"></span>
                    </div>
                    <div class="form-group col-6">
                        <label for="telephone">Téléphone</label> <!--telephone-->
                        <input type="text" class="form-control" id="telephone">
                        <span id="!telephone_manquant"></span>
                    </div>
                </div>
                <div class="form-group mt-5 mb-3">
                    <label for="adresse">Votre adresse :</label> <!--adresse-->
                    <textarea class="form-control" id="adresse" name="adresse"></textarea>
                    <span id="!adresse_manquant"></span>
                </div>
                <div class="form-group mt-5 mb-3">

                    <a href="contact.php" class="btn btn-primary">Envoyer</a> <!--bouton-->

                </div>

            </form>
        </div>
        <div class="d-md-none"> <!--version mobile les élément son en colonne-->

            <div class="w-50 mx-auto mt-2" style="max-width: 540px;"> <!--carte-->

                <div class="row no-gutters">

                    <div class="col-md-4">
                        <img src="asset/images_the_district/food/lasagnes_viande.jpg" class="card-img"
                            alt="platCommander">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Plats commandés</h5>
                            <p class="card-text">Quantité: <span id="quantityy">0</span></p>
                            <button id="increaseQuantityy" class="btn btn-primary">Augmenter la quantité</button>
                        </div>
                    </div>
                </div>
            </div>
            <form>

                <div class="form-group mt-5">
                    <label for="nomPrenoms">Nom et prénom</label> <!--nom et prenom-->
                    <input type="text" class="form-control" id="nomPrenoms">
                    <span id="!n_manquants"></span>
                </div>

                <div class="form-group mt-5">
                    <label for="emails">Email</label> <!--email-->
                    <input type="email" class="form-control" id="emails">
                    <span id="!email_manquants"></span>
                </div>
                <div class="form-group mt-5">
                    <label for="telephones">Téléphone</label> <!--telephone-->
                    <input type="text" class="form-control" id="telephones">
                    <span id="!telephone_manquants"></span>
                </div>

                <div class="form-group mt-5 mb-3">
                    <label for="adresses">Votre adresse :</label> <!--adresse-->
                    <textarea class="form-control" id="adresses" name="adresses"></textarea>
                    <span id="!adresse_manquants"></span>
                </div>
                <div class="form-group mt-5 mb-3">

                    <a href="contact.php" class="btn btn-primary">Envoyer</a> <!--bouton-->

                </div>

            </form>
        </div>

        <?php include 'footer.php'; ?> <!--bas de page-->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="asset/js/javascript.js"></script>

</body>

</html>