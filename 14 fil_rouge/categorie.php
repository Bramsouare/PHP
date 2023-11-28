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
            <img src="asset/images_the_district/borderau.png" class="img-fluid col-12 px-0 m-0" alt="image de tete"> <!--image-->

        </div>
        <div id="b" class="row d-flex justify-content-center mx-auto"></div>
        <div class="indexx">
            

        <div class="d-flex justify-content-center "><!--élément centrer-->
            <div class="row col-12 col-md-8 d-flex justify-content-around" id="divcat"></div> 
        </div><br>
        
        <div class="col-12 col-md-8 d-flex justify-content-between row mt-3"> <!--bouton-->
            <a href="index.php" class="btn btn-secondary btn-md zoom col-2">Précédent</a>
            <a href="touslesplats.php" class="btn btn-secondary btn-md zoom col-2">Suivant</a>
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
                

                for (i = 0; i < categorie.length; i++) { // boucle qui parcour la longeur de categorie dans json 

                    var cat = categorie[i]; // et mis a jour pour crée dynamiquement les carte

                    // carte qui s'affiche sur la page
                    var card = `
                    <div class="card zoom ck col-12 col-md-2 mb-3 my-4 mx-5">
                        <img src="asset/images_the_district/categorie/${cat.image}" class="card-img-top img-fluid cards-img imgs" alt="${cat.libelle}">
                            <div class="card-body">
                            <p value="${cat.id_categorie}"class="card-text">${cat.libelle}</p>
                            </div>
                        </div>`;
                    divcat.append(card);
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
                                <div class="card zoom col-12 col-md-2 mb-3 my-3 mx-4">
                                    <img src="asset/images_the_district/food/${un.image}" class="card-img-top img-fluid card-img imgs" alt="${un.libelle}">
                                    <div class="card-body">
                                        <p class="card-text">${un.libelle}</p>
                                        <a href="commande.php" class="btn btn-primary d-flex justify-content-center">Commander</a>
                                    </div>
                                </div>`;

                            // Ajoute la carte à un élément spécifique sur la page
                         $("#b").append(carte);

                        }

                    })
                })

            }));

        });

    </script>
    <script src="asset/js/javascript.js"></script>

    <?php include 'footer.php'; ?>

</body>

</html>
