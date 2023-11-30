<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="alternate" href="atom.xml" type="application/atom+xml" title="Atom">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
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
            <img src="asset/images_the_district/borderau.png" class="img-fluid col-12 px-0 m-0 rounded-3" alt="image de tete"> <!--image-->

        </div>

        <div id="commande" class="row d-flex justify-content-center mx-auto"></div> <!---->
        

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

        <div id="b" class="row d-flex justify-content-center mx-auto"></div>
        <div class="indexx">
            

        <div class="d-flex justify-content-center "><!--élément centrer-->
            <div class="row col-12 col-md-8 d-flex justify-content-around" id="divcat"></div> 
        </div><br>
        
        <div class=" d-flex justify-content-around row mt-2"> <!--bouton-->
            <a href="index.php" class="btn btn-light btn-lg zoom col-5 col-md-1 btns">Précédent</a>
            <a href="touslesplats.php" class="btn btn-light btn-lg zoom col-5 col-md-1 btns">Suivant</a>
        </div>
              
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function () { // exécute le document quand il est prêt

            $.getJSON('asset/json/json.json', (function (data) { // récupération des données json
 
                var categorie = data.categorie; // extrait de json les données de categorie
                var divcat = $('#divcat'); // l'endroit de l'affichage
                var index = $(".indexx");
                var form = $(".form");
                var commande = $("#commande");
                form.hide();

                for (i = 0; i < categorie.length; i++) { // boucle qui parcour la longeur de categorie dans json 

                    var cat = categorie[i]; // et mis a jour pour crée dynamiquement les carte

                    // carte qui s'affiche sur la page
                    var card = $( `
                    <div class="card custom-border bg zoom ck col-12 col-md-2 mb-3 my-4 mx-5">
                        <img src="asset/images_the_district/categorie/${cat.image}" class="card-img-top border-1 mt-3 img-fluid cards-img imgs" alt="${cat.libelle}">
                            <div class="card-body text-center">
                            <h2 value="${cat.id_categorie}"class="card-text">${cat.libelle}</h2>
                            <span class="alert text-danger"><span>
                            </div>
                    </div>`);

                    var alert = card.find(".alert");
                        alert.text(cat.active === 'Yes' ? '' : 'victime de son succès');
                 
                    if (cat.active === "Yes"){ 
                        divcat.append(card); // afficher les carte de divcat
                    }
                         
                    else {

                        vide = $( `
                            <div class="card custom-border bg zoom  col-12 col-md-2 bg my-4 mx-5 " >
                                <img src="asset/images_the_district/categorie/${cat.image}" class="card-img-top border-1 mt-3 img-fluid cards-img imgs" alt="${cat.libelle}">
                                <div class="card-body text-center">
                                <h2 value="${cat.id_categorie}"class="card-text text-wrap">${cat.libelle}</h2>
                                <span class="alert text-danger"></span>
                            </div>
                        </div>`);

                        divcat.append(vide); // afficher les carte de divcat

                        var alert = vide.find(".alert");
                        alert.text(cat.active === 'Yes' ? '' :'victime de son succès');
                    };
                };

                $(".ck") .click (function (){ // quand l'élément ck est cliqué 
                    index.hide();
                    // trouvé la valeur sur l'élément cliqué puis l'affecte dans la variable 
                    var platid = $(this).find(".card-text").attr("value");

                    // parcourir plat
                    var plat = data.plat
                
                    // vider le resultat de la recherche
                    $("#b").empty();
                 
                    // parcour chaque élément dans le tableau plat
                    $.each (plat, function (index, un){

              
                        // récupère l'id de la catégorie de l'élément 
                        var catid = un.id_categorie;

                        // vérifie si l'id de la catégorie et l'id en cours de traitement correspondent
                        if (catid == platid) {
                            
                            // crée une carte qui s'affiche quand on clique sur une carte de la page
                            var carte = `
                                <div class="card custom-border bg zoom col-12 col-md-2 mb-3 my-3 mx-4">
                                    <img src="asset/images_the_district/food/${un.image}" class="card-img-top border-1 mt-3 img-fluid card-img imgs" alt="${un.libelle}">
                                    <div class="card-body text-center">
                                        <h2 class="card-title">${un.libelle}</h2>
                                        <p class="card-text">${un.description} <br>
                                        Menu: ${un.prix} €</p>
                                        <a href="#" value="${un.id_plat}" class="btn btn-light d-flex justify-content-center idd">Commander</a>
                                    </div>
                                </div>`;

                            // Ajoute la carte à un élément spécifique sur la page
                            $("#b").append(carte);

                        };

                    });

                    $(document).on("click", ".idd", function(e){
                 
                        e.preventDefault();
                        console.log("e");
                        var ids = $(this).attr("value");

                        pushcommande(ids);
                    
                    });

                    function pushcommande(ids){

                        $("#b").empty();
                        form.show();


                        $.each(plat, function(groupe, individuel){

                            if (ids == individuel.id_plat){

                                var carte = `
                                    <div class="card custom-border zoom col-12 col-md-2 mb-3 my-3 mx-4 d-flex justify-content-center">
                                        <img src="asset/images_the_district/food/${individuel.image}" class="card-img-top border-1 mt-3 img-fluid card-img imgs" alt="${individuel.libelle}">
                                        <div class="card-body">
                                            <h2 class="card-title">${individuel.libelle}</h2>
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

            }));

        });

    </script>
    <script src="asset/js/javascript.js"></script>

    <?php include 'footer.php'; ?>

</body>

</html>
