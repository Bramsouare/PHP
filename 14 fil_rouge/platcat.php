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
        <div class="d-flex justify-content-center"> <!--centre le tittre-->
            <h3>Tout les plats</h3>
        </div>

        <div class="d-none d-lg-block mx-auto mt-5">

            <div class="d-flex justify-content-around mb-3"> <!--aligne les carte sur la même ligne-->

                <div class="card zoom" style="width: 18rem;"> <!--carte-->
                    <img src="asset/images_the_district/categorie/asian_food_cat.jpg" class="card-img-top"
                        alt="plat asiatique">
                    <div class="card-body">
                        <h5 class="card-title">Plats asiatique</h5>
                        <p class="card-text">Maki au crevette</p>
                        <a href="commande.php" class="btn btn-primary">Commander</a>
                    </div>
                </div>
                <div class="card zoom" style="width: 18rem;"> <!--carte-->
                    <img src="asset/images_the_district/food/hamburger.jpg" class="card-img-top" alt="burger">
                    <div class="card-body">
                        <h5 class="card-title">Nos burgers</h5>
                        <p class="card-text">Hamburger du chef</p>
                        <a href="commande.php" class="btn btn-primary">Commander</a>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-around"> <!--aligne les carte sur la même ligne-->

                <div class="card zoom" style="width: 18rem;"> <!--carte-->
                    <img src="asset/images_the_district/food/spaghetti-legumes.jpg" class="card-img-top"
                        alt="nos pates">
                    <div class="card-body">
                        <h5 class="card-title">Nos pâtes</h5>
                        <p class="card-text">Pates italienne</p>
                        <a href="commande.php" class="btn btn-primary">Commander</a>
                    </div>
                </div>
                <div class="card zoom" style="width: 18rem;"> <!--carte-->
                    <img src="asset/images_the_district/menu-pizza.jpg" class="card-img-top" alt="pizzas">
                    <div class="card-body">
                        <h5 class="card-title">Nos pizzas</h5>
                        <p class="card-text">Pizza italienne</p>
                        <a href="commande.php" class="btn btn-primary">Commander</a>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-around mt-4"> <!--bouton-->

                <a href="platscat.php" class="btn btn-secondary btn-sm zoom">Précédent</a>
                <a href="commande.php" class="btn btn-secondary btn-sm zoom">Suivant</a>

            </div>
        </div>
        <div class="d-md-none"> <!--version mobile et aligne les carte en colonne-->


            <div class="card d-md-none my-2 w-100"> <!--carte-->
                <img src="asset/images_the_district/categorie/asian_food_cat.jpg" class="card-img-top"
                    alt="plat asiatique">
                <div class="card-body">
                    <h5 class="card-title">Plat asiatique</h5>
                    <p class="card-text">Maki au crevette</p>
                    <a href="commande.php" class="btn btn-primary">Commander</a>
                </div>
            </div>
            <div class="card d-md-none my-2 w-100"> <!--carte--> 
                <img src="asset/images_the_district/categorie/burger_cat.jpg" class="card-img-top" alt="burger">
                <div class="card-body">
                    <h5 class="card-title">Nos burgers</h5>
                    <p class="card-text">Hamburger du chef</p>
                    <a href="commande.php" class="btn btn-primary">Commander</a>
                </div>
            </div>
            <div class="card d-md-none my-2 w-100"> <!--carte-->
                <img src="asset/images_the_district/categorie/pasta_cat.jpg" class="card-img-top" alt="nos pates">
                <div class="card-body">
                    <h5 class="card-title">Nos pâtes</h5>
                    <p class="card-text">Pâtes italienne</p>
                    <a href="commande.php" class="btn btn-primary">Commander</a>
                </div>
            </div>
            <div class="card d-md-none my-2 w-100"> <!--carte-->
                <img src="asset/images_the_district/categorie/pizza_cat.jpg" class="card-img-top" alt="pizzas">
                <div class="card-body">
                    <h5 class="card-title">Nos pizzas</h5>
                    <p class="card-text">Pizza italienne</p>
                    <a href="commande.php" class="btn btn-primary">Commander</a>
                </div>
            </div>

            <div class="d-flex justify-content-around"> <!--bouton-->

                <a href="platscat.php" class="btn btn-secondary btn-sm">Précédent</a>
                <a href="commande.php" class="btn btn-secondary btn-sm">Suivant</a>

            </div>
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