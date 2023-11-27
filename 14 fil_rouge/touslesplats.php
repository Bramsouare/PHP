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

        <?php include 'header.php';?> <!--entête-->

        <div>
            <img src="asset/images_the_district/borderau.png" class="img-fluid col-12 px-0 m-0" alt="image de tete"> <!--image-->
        </div>
        <div class="d-flex justify-content-center mt-3"> <!--tittre centrer-->

            <h3>Nom des plats</h3>
        </div>
        <div class="d-none d-lg-block mx-auto">

        <div class=" d-flex justify-content-center"><!--élément centrer-->
                <div class="row col-9 " id="divcat"></div> 
            </div><br>   

            <div class="d-flex justify-content-center"> <!--élément centrer-->              
                <div class="col-9 row " id="divplat"></div>
            </div>
            
            <div class="d-flex justify-content-around mt-3"> <!--bouton-->

                <a href="categorie.php" class="btn btn-secondary btn-sm zoom">Précédent</a>
                <a href="commande.php" class="btn btn-secondary btn-sm zoom">Suivant</a>
            </div>
        </div>
        <div class="d-md-none mx-auto"> <!--pour la version mobile-->

            <div class="d-flex justify-content-center w-100">

                <div class="col-12">
                    <div class="row col-" id="divplat"></div>
                </div>
            </div>
            <div class="d-none d-flex justify-content-around "> <!--bouton-->
                <a href="categorie.php" class="btn btn-secondary btn-sm">Précédent</a>
                <a href="commande.php" class="btn btn-secondary btn-sm">Suivant</a>
            </div>
        </div>

        <?php include 'footer.php'; ?> <!--bas de page-->

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script>

        $(document).ready(function () { // s'exécutera une fois le document prêt

            $.getJSON('asset/json/json.json', function (data) { // parcour le dossier json

                var plat = data.plat; // extrait les élément plat de json
                var divplat = $('#divplat'); // la ou sa sera afficher
                
                for (i = 0; i < plat.length; i++) { // une boucle qui parcour tout les plats

                    var plt = plat[i]; // mis a jour pour crée dynamiquement les cartes
                    var card = `
                    <div class="card zoom col-12 col-md-2 mb-3 my-3 mx-4">
                        <img src="asset/images_the_district/food/${plt.image}" class="card-img-top img-fluid card-img" alt="${plt.libelle}">
                        <div class="card-body">
                            <p class="card-text">${plt.libelle}</p>
                        </div>
                    </div></div>`;
                    divplat.append(card);
                };
            });
        });

    </script>

</body>
</html>
