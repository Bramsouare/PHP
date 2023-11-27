<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>

<body>

    <div class="container-fluid ">
       
        <?php include 'header.php';?> <!--entête de page-->
               
        <div class="d-none d-lg-block position-relative"> <!--barre de recherche sur le centre de la video-->

            <video autoplay loop muted playsinline poster="asset/images_the_district/burgervideo.mp4" class="video"> <!--video--> 
                <source src="asset/images_the_district/burgervideo.mp4" type="video/mp4">
            </video>
            <div class="search-bar position-absolute" id="searchb">

                <nav class="navbar navbar-light bg-transparent "> <!--barre de recherche-->
                    <form class="form-inline justify-content-between input-group">
                        <input class="form-control " type="search" id="input" placeholder="rechercher...">
                        <button class="btn btn-outline-warning ml-auto" id="cc" type="button">go!</button>
                    </form>

                </nav>
            </div>
        </div>
        <div id="r" class="row"></div>
        <div id="a" class="row"></div>

        <div class="image-container d-md-none">
            <img src="asset/images_the_district/borderau.png" alt="image de remplacement" class="img-fluid"> <!--image-->
        </div>
        <div class="index">
            <div class="d-none d-lg-block mx-auto">

                <div class=" d-flex justify-content-center"><!--élément centrer-->
                    <div class="row col-9 " id="divcat"></div> 
                </div><br>     
                
                <div class="d-flex justify-content-around mt-5"> <!--bouton-->             
                    <a href="categorie.php" class="btn btn-secondary btn-md zoom">Suivant</a>
                </div>
            </div>
            
            <div class="d-md-none my-2"> <!--élement pour version mobile-->
            
                <div id="cat"></div><br>         
                </div>
                
                <div class="d-md-none d-flex justify-content-around mt-5"> <!--bouton-->               
                    <a href="categorie.php" class="btn btn-secondary btn-sm zoom">Suivant</a>
                </div>
            </div>
        </div>
    </div>
        <?php include 'footer.php';?> <!--bas de page--> 
    

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>

        $(document).ready(function () { // exécute le document une fois prêt

            // (r)le résultat de la recherche
            var chercheresult = $("#r");
            // l'endroit de l'affichage
            var result = $("#a");
            // la div des cartes de l'index
            var index = $(".index");

            index.show();
            // (cc) cliquer sur le bouton chercher
            $("#cc").click(function () {
                chercher();
            });

            function chercher() { // ma fonction 

                chercheresult.empty(); // efface le resultat de la recherche
                var input = $("#input").val(); // recupère la valeur du champs 

                // Cacher toutes les cartes de l'index
            

                $.getJSON('asset/json/json.json', function (data) { // recupère les données json 

                    // extrait de json les élémens categorie et plat
                    var categorie = data.categorie; 
                    var plat = data.plat;

                    // definit une fonction pour effectuer la recherche
                    function faitSearch(input) {

                        // filtre les plats avec libelle
                        var matchPlats = plat.filter(function (pla) {

                            // rendre le code insensible aux majuscules et minuscules 
                            return pla.libelle.toLowerCase().includes(input.toLowerCase());
                        });

                        // met a jour le résultats de la recherche
                        updateSearchResults(matchPlats);
                    }

                    // Fonction pour mettre à jour la liste des suggestions
                    function updateSearchResults(results) {

                        // crée une carte pour chaque éléments
                        $.each(results, function (element, item) {

                            // carte qui s'affiche quand on click go!
                            var carte = ` 
                            <div class="card zoom col-2 mb-3 my-3 mx-4" >
                                <img src="asset/images_the_district/food/${item.image}" class="card-img-top img-fluid cards-img" alt="${item.libelle}">
                                <div class="card-body">
                                    <p class="card-text">${item.libelle}</p>
                                    <a href="commande.php" class="btn btn-primary">Commander</a>
                                </div>
                            </div></div>`;

                            // ajoute la carte a la liste des resultats de recherche
                            chercheresult.append(carte);
                        });
                    }

                    // Appeler la fonction de recherche avec l'entrée de l'utilisateur
                    faitSearch(input);
                    
                });
            }
      
            $.getJSON('asset/json/json.json', (function (data) { // récupération des données json
                var plat = data.plat;  // parcourir plat
                var categorie = data.categorie; // extrait de json les données de categorie
                var divcat = $('#divcat'); // l'endroit de l'affichage
                var ctg =$("#cat"); // l'endroit de l'affichage format sm

//AFFICHAGE CATEGORIES:

                for (i = 0; i < categorie.length; i++) { // boucle qui parcour la longeur de categorie dans json 

                    var cat = categorie[i]; // et mis a jour pour crée dynamiquement les carte

                    // carte qui s'affiche sur l'index 
                    var card = `
                        <div class="card zoom ck col-12 col-md-2 mb-3 my-3 mx-5" >
                            <img src="asset/images_the_district/categorie/${cat.image}" class="card-img-top img-fluid cards-img imgs" alt="${cat.libelle}">
                            <div class="card-body">
                                <p value="${cat.id_categorie}"class="card-text">${cat.libelle}</p>
                            </div>
                        </div>`;
                    divcat.append(card);
                };

//AFFICHAGE PLATS:

                for (i = 0; i < plat.length; i++) { // boucle qui parcour la longeur de plat dans json
                    
                    var un = plat[i]; // et mis a jour pour crée dynamiquement les cartes
 
                    // carte qui s'affiche sur la version mobile
                    var carte = `
                                <div class="card zoom col-12 col-md-2 my-2 mx-auto">
                                    <img src="asset/images_the_district/food/${un.image}" class="card-img-top img-fluid card-img imgs" alt="${un.libelle}">
                                    <div class="card-body">
                                        <p class="card-text">${un.libelle}</p>
                                        <a href="commande.php" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>`;
                                
                                ctg.append(carte);
                };
                $(".ck") .click (function (){ // quand l'élément ck est cliqué 
                    index.hide();
                    // trouvé la valeur sur l'élément cliqué puis l'affecte dans la variable 
                    var platid = $(this).find(".card-text").attr("value");

                    // vider le resultat de la recherche
                    $("#a").empty();
                 
                    // parcour chaque élément dans le tableau plat
                    $.each (plat, function (index, un){

              
                        // récupère l'id de la catégorie de l'élément 
                        var catid = un.id_categorie;

                        // vérifie si l'id de la catégorie et l'id en cours de traitement correspondent
                        if (catid == platid) {
                            console.log(un);
                            // crée une carte

                            // carte qui s'affiche quand on click sur une carte de l'index
                            var carte = `
                                <div class="card zoom col-12 col-md-2 mb-3 my-3 mx-4">
                                    <img src="asset/images_the_district/food/${un.image}" class="card-img-top img-fluid card-img imgs" alt="${un.libelle}">
                                    <div class="card-body">
                                        <p class="card-text">${un.libelle}</p>
                                        <a href="commande.php" class="btn btn-primary">Commander</a>
                                    </div>
                                </div>`;

                            // Ajoute la carte à un élément spécifique sur la page
                         result.append(carte);

                        }

                    })
                })

            }));

        });

    </script>

</body>

</html>