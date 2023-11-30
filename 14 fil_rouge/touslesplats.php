<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="alternate" href="atom.xml" type="application/atom+xml" title="Atom">
    <link rel="stylesheet" href="style.css">
    <title>Categorie</title>
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
        <div id="commande" class="row d-flex justify-content-center mx-auto"></div>
        

        <div class="form">
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
        <div class="text-center mt-3" id="titre"> <!--tittre centrer-->

            <h3>Tout les plats</h3>

        </div>
        <div class="row d-flex justify-content-center">
             
            <!--élément centrer-->              
            <div class="col-12 col-md-9 row d-flex justify-content-center " id="divplat"></div> <!--col-12 format sm et au dessus de md col 9 -->                  
 
           
            <div class="d-flex justify-content-around row mt-3"> <!--bouton-->      
                <a href="categorie.php" class="btn btn-light btn-lg zoom col-5 col-md-1 btns">Précédent</a>
                <a href="contact.php" class="btn btn-light btn-lg zoom col-5 col-md-1 btns">Suivant</a>
            </div>
       
        
            
            <?php include 'footer.php';?> <!--bas de page-->
         </div>

    </div>

    
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function () { // s'exécutera une fois le document prêt

            $.getJSON('asset/json/json.json', function (data) { // parcour le dossier json

                var plat = data.plat; // extrait les élément plat de json
                var divplat = $('#divplat'); // la ou sa sera afficher
              
                
                for (i = 0; i < plat.length; i++) { // une boucle qui parcour tout les plats

                    var plt = plat[i]; // mis a jour pour crée dynamiquement les cartes

                    // carte qui s'affiche sur la page
                    var card = `
                    <div class="card custom-border bg zoom col-12 col-md-2 mb-2 my-2 mx-3">
                        <img src="asset/images_the_district/food/${plt.image}" class="card-img-top border-1 mt-3 img-fluid card-img timg" alt="${plt.libelle}">
                        <div class="card-body text-center">
                            <h3 class="card-title">${plt.libelle}</h3>
                            <p class="card-text">${plt.description} <br>
                            Menu: ${plt.prix} €</p>
                            <a href="#" value="${plt.id_plat}" class="btn btn-light
                             d-flex justify-content-center idd">Commander</a>
                        </div>
                    </div></div>`;
                    divplat.append(card);
                };

                var form = $(".form");
                var commande = $("#commande");
                var btns = $("#btns");
                form.hide();
                $(document).on("click", ".idd", function(e){
                 
                    e.preventDefault();
                    console.log("e");
                    var ids = $(this).attr("value");

                    pushcommande(ids);
             
                });

                function pushcommande(ids){

                    $(".btns").hide();
                    $("#titre").hide();
                    $("#b").empty();
                    $("#divplat").empty();
                    form.show();


                    $.each(plat, function(groupe, individuel){

                        if (ids == individuel.id_plat){

                            var carte = `
                                <div class="card custom-border bg zoom col-12 col-md-2 mb-3 my-3 mx-4 d-flex justify-content-center">
                                    <img src="asset/images_the_district/food/${individuel.image}" class="card-img-top border-1 mt-3 img-fluid card-img imgs" alt="${individuel.libelle}">
                                    <div class="card-body text-center">
                                        <h3 class="card-title">${individuel.libelle}</h3>
                                        <p class="card-text">${individuel.description} <br>
                                        Menu: ${individuel.prix} €</p>
                                        <a href="#" class="btn btn-primary d-flex justify-content-center">Quantité: 1</a>
                                    </div>
                                </div>`;

                            commande.append(carte);


                        };
                    });
                };
            });
        });

    </script>

</body>
</html>
