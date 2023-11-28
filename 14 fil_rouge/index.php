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
        <div class=" my-2"> <!--élement pour version mobile-->     

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

      
        <div id="a" class="row d-flex justify-content-center mx-auto"></div>
        <div class="row smplat "></div>
        
        <div class="image-container d-md-none">

            <img src="asset/images_the_district/borderau.png" alt="image de remplacement" class="img-fluid"> <!--image-->
        </div>

        <div class="index">

            <div class=" d-flex justify-content-center"><!--élément centrer-->
                <div class="row col-12 col-md-9 d-flex justify-content-center" id="divcat"></div> 
            </div><br>     
                
            <div class="d-flex justify-content-around mt-5"> <!--bouton-->           
                <a href="categorie.php" class="btn btn-secondary btn-md zoom col-2">Suivant</a>
            </div>

            
        </div>
    </div>

    <?php include 'footer.php';?> <!--bas de page--> 
    

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>

        $(document).ready(function () { // exécute le document une fois prêt

            
            var result = $("#a"); // la div des cartes de l'index
            
            var index = $(".index");
            
            var divcat = $('#divcat'); // l'endroit de l'affichage
           
            var smplat=$(".smplat");
            
            index.show();
            
            $.getJSON('asset/json/json.json', function (data) { // recupère les données json

                // extrait de json les élémens categorie et plat
                var categorie = data.categorie; 
                var plat = data.plat;

                // (cc) cliquer sur le bouton chercher
                $("#cc").click(function () {
                    chercher();
                });

                function chercher() { // ma fonction 

                    index.hide();
                    result.empty();
                    smplat.empty();
                  
                    divcat.empty();

                    var input = $("#input").val(); // recupère la valeur du champs

                    var matchPlats = plat.filter(function (pla) { // filtre les plats avec libelle
                 
                        // rendre le code insensible aux majuscules et minuscules 
                        return pla.libelle.toLowerCase().includes(input.toLowerCase());
                                     
                    });

                    $.each(matchPlats, function (element, item) {
                 
                        // crée une carte pour chaque éléments qui s'affiche quand on click go!
                        var carte = ` 
                        <div class="card zoom col-2 mb-3 my-3 mx-4" >
                            <img src="asset/images_the_district/food/${item.image}" class="card-img-top img-fluid cards-img imgs" alt="${item.libelle}">
                            <div class="card-body">
                                <p class="card-text">${item.libelle}</p>
                                <a href="commande.php" class="btn btn-primary d-flex justify-content-center">Commander</a>
                            </div>
                        </div></div>`;

                        // ajoute la carte a la liste des resultats de recherche
                        smplat.append(carte);
                        console.log(carte);
                                              
                    });

                };
      
                //AFFICHAGE CATEGORIES:

                for (i = 0; i < categorie.length; i++) { // boucle qui parcour la longeur de categorie dans json 

                    var cat = categorie[i]; // et mis a jour pour crée dynamiquement les carte

                    // carte qui s'affiche sur l'index 
                    var card = `
                        <div class="card zoom ck col-12 col-md-2  my-4 mx-5 " >
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

                    // vider le resultat de la recherche
                    result.empty();
                 
                    // parcour chaque élément dans le tableau plat
                    $.each (plat, function (index, un){

              
                        // récupère l'id de la catégorie de l'élément 
                        var catid = un.id_categorie;

                        // vérifie si l'id de la catégorie et l'id en cours de traitement correspondent
                        if (catid == platid) {
                            
                            // crée une carte carte qui s'affiche quand on click sur une carte de l'index
                            var carte = `
                                <div class="card zoom col-12 col-md-2 mb-3 my-3 mx-4 d-flex justify-content-center">
                                    <img src="asset/images_the_district/food/${un.image}" class="card-img-top img-fluid card-img imgs" alt="${un.libelle}">
                                    <div class="card-body">
                                        <p class="card-text">${un.libelle}</p>
                                        <a href="commande.php" class="btn btn-primary d-flex justify-content-center">Commander</a>
                                    </div>
                                </div>`;

                            // Ajoute la carte à un élément spécifique sur la page
                            result.append(carte);

                        };

                    });

                });

            });

        });

    </script>

</body>

</html>