<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="alternate" href="atom.xml" type="application/atom+xml" title="Atom">
    <link rel="stylesheet" href="style.css">
    <title>Récupérer les données d'un formulaire</title>
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
        <header class="col-12 d-flex justify-content-between"> <!-- les deux élément sur la même ligne -->

            <div class="col-4 col-md-2 mt-2 ">
                <img src="asset/images_the_district/the_district_brand/linkedin_banner_image_1.png"
                class="img-fluid mb-1 logo" alt="the district logo">
            </div>

            <nav class="navbar navbar-expand-sm navbar-light col-md-9 ml-auto "> 

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="collapsibleNavbar">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link active " aria-current="page" href="index.html">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="categorie.html">Categorie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="platscat.html">Plats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <div>

            <img src="asset/images_the_district/borderau.png" class="img-fluid col-12 px-0 m-0" alt="image de tete"> <!-- borderau prebd toute la largeur-->

        </div>
        <div class="d-none d-lg-block mx-auto"> <!-- version page web-->
            <form method="post" action="monphp.php"> <!--envoie des données method post-->
                <div class="row mt-5">
                    <div class="form-group col-6 ">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                        <div id="n" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ce champ est obligatoire !</strong> 
                        </div><br>
                    </div>
                    <div class="form-group col-6 ">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                        <div id="p" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ce champ est obligatoire !</strong> 
                        </div><br>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div id="e" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ce champ est obligatoire !</strong> 
                        </div><br>
                    </div>
                    <div class="form-group col-6">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone">
                        <div id="t" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ce champ est obligatoire !</strong> 
                        </div><br>
                    </div>
                </div>
                <div class="form-group mt-5 mb-3">
                    <label for="message">Message :</label>
                    <textarea class="form-control" id="message" name="message"></textarea>
                    <div id="m" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>
             
                <button  type="submit" href="#" id="envoyer" class="btn btn-primary btn-sm zoom">Envoyer</button>
                
            </form>

        </div>
        <div class="d-md-none"> <!-- version mobile-->

            <form>

                <div class="form-group mt-5 ">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom2">
                    <div id="n" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>

                <div class="form-group mt-5">
                    <label for="pr">Prénom</label>
                    <input type="text" class="form-control" id="pr2">
                    <div id="p" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>

                <div class="form-group mt-5">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email2">
                    <div id="e" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>

                <div class="form-group mt-5">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone2">
                    <div id="t" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>

                <div class="form-group mt-5 mb-3">
                    <label for="messages">Message :</label>
                    <textarea class="form-control" id="messages" name="messages2"></textarea>
                    <div id="m" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>
                <div class="envoyers">
                    <a class="btn btn-primary btn-sm">Envoyer</a>
                </div>

            </form>

        </div>


        <footer class="col-12"> <!-- logo réseaux sociaux -->

            <div class="d-flex justify-content-center">
                <img class="col-1" src="asset/images_the_district/instagram.png" alt="logo instagram">
                <img class="col-1" src="asset/images_the_district/facebook.png" alt="logo facebook">
                <img class="col-1" src="asset/images_the_district/youtube.png" alt="logo youtube">

            </div>

        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="asset/js/javascript.js"></script>

</body>

</html>