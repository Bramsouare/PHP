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

        <?php include 'header.php';?> <!--entête de page-->

        <div>
            <img src="asset/images_the_district/borderau.png" class="img-fluid col-12 px-0 m-0 rounded" alt="image de tete"> <!--image-->

        </div>
        <div class="d-none d-lg-block mx-auto">


        <form action="formulaire.php" method="POST">

            <div class="row mt-5"> <!--les éléments sont aligner sur la même ligne-->

                <div class="form-group col-6 "> <!--nom-->
                    <label for="nom">nom</label>
                    <input type="text" class="form-control"  name="nom">
                    <div id="n" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>
                <div class="form-group col-6 ">
                    <label for="prenom">Prénom</label> <!--prenom-->
                    <input type="text" class="form-control"  name="prenom">
                    <div id="p" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>
            </div>
            <div class="row mt-4">

                <div class="form-group col-6">
                    <label for="email">Email</label> <!--email-->
                    <input type="email" class="form-control"  name="email">
                    <div id="e" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>
                <div class="form-group col-6">
                    <label for="telephone">Téléphone</label> <!--telephone--> 
                    <input type="tel" class="form-control"  name="telephone">
                    <div id="t" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>
             </div>
            <div class="form-group mt-5 mb-3">

                <label for="message">Message :</label> <!--message-->
                <textarea class="form-control"  name="message"></textarea>
                <div id="m" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Ce champ est obligatoire !</strong> 
                </div><br>
            </div>
            <button type="submit" href="#" id="envoyer" name="envoyer" class="btn btn-light btns btn-md zoom">Envoyer</button> <!--bouton-->
            </form>
        </div> 
        <div class="d-flex justify-content-around">
            <a href="touslesplats.php" class=" btn btn-light btn-lg zoom col-5 col-md-1 btns">Précédent</a>   
        </div>
      
        <div class="d-md-none">

           
            <form action="formulaire.php" method="POST">

                <div class="form-group mt-5 ">
                    <label for="nom">Nom</label> <!--nom-->
                    <input type="text" class="form-control"  name="nom">
                    <div id="n" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>

                <div class="form-group mt-5">
                    <label for="pr">Prénom</label> <!--prenom-->
                    <input type="text" class="form-control"  name="prenom">
                    <div id="p" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>

                <div class="form-group mt-5">
                    <label for="email">Email</label> <!--email-->
                    <input type="email" class="form-control"  name="email">
                    <div id="e" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>

                <div class="form-group mt-5">
                    <label for="telephone">Téléphone</label> <!--telephone-->
                    <input type="tel" class="form-control"  name="telephone">
                    <div id="t" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>

                <div class="form-group mt-5 mb-3">
                    <label for="messages">Message :</label> <!--message-->
                    <textarea class="form-control"  name="message"></textarea>
                    <div id="m" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>
                <button type="submit" href="#" id="envoyer" name="envoyer"class="btn btn-ligth btn-md ">Envoyer</button><!--bouton-->
                 
                

            </form>

        </div>

        <?php include 'footer.php'; ?> <!--bas de page-->

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
 
</body>

</html>