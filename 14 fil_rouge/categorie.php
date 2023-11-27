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
    
        <?php include 'header.php'; ?> <!--inclure le header-->

        <div>
            <img src="asset/images_the_district/borderau.png" class="img-fluid col-12 px-0 m-0" alt="image de tete"> <!--image-->

        </div>

        <div class="d-none d-lg-block mx-auto">

            <div class="d-flex justify-content-center"><!--élément centrer-->
                <div class="row col-9" id="divcat"></div> 
            </div><br>
      
            <div class="d-flex justify-content-around mt-5"> <!--bouton-->
                <a href="index.php" class="btn btn-secondary btn-sm zoom">Précédent</a>
                <a href="touslesplats.php" class="btn btn-secondary btn-sm zoom">Suivant</a>
            </div>
        </div>

        <div>

            <div class="d-md-none"> <!--élement pour version mobile-->
                <div class="w-100">
                    <div class="row col-12" id="divcat"></div>
                </div><br>
            </div>
            <div class="d-none d-md-none d-flex justify-content-around"> <!--bouton-->

                <a href="index.php" class="btn btn-secondary btn-sm">Précédent</a>
                <a href="touslesplats.php" class="btn btn-secondary btn-sm">Suivant</a>
            </div>
        </div>

       
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script>

        $(document).ready(function () { // exécute le document quand il est prêt

            $.getJSON('asset/json/json.json', (function (data) { // récupération des données json
 
                var categorie = data.categorie; // extrait de json les données de categorie
                var divcat = $('#divcat'); // l'endroit de l'affichage

                for (i = 0; i < categorie.length; i++) { // boucle qui parcour la longeur de categorie dans json 

                    var cat = categorie[i]; // et mis a jour pour crée dynamiquement les carte

                    var card = `
                    <div class="card zoom col-12 col-md-2 mb-3 my-3 mx-5">
                        <img src="asset/images_the_district/categorie/${cat.image}" class="card-img-top img-fluid cards-img" alt="${cat.libelle}">
                            <div class="card-body">
                                <p class="card-text">${cat.libelle}</p>
                            </div>
                        </div>`;
                    divcat.append(card);
                };

            }));

        });

    </script>
    <script src="asset/js/javascript.js"></script>

    <?php include 'footer.php'; ?>

</body>

</html>
