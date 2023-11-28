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
            <img src="asset/images_the_district/borderau.png" class="img-fluid col-12 px-0 m-0" alt="image de tete"> <!--image-->
        </div>
        <div class="text-center mt-3"> <!--tittre centrer-->

            <h3>Tout les plats</h3>

        </div>
        <div class="row d-flex justify-content-center">
             
                  <!--élément centrer-->              
             <div class="col-12 col-md-9 row d-flex justify-content-center " id="divplat"></div> <!--col-12 format sm et au dessus de md col 9 -->                  
 
            
         <!--bouton-->
            <div class="col-12 col-md-8 d-flex justify-content-between row  mt-3">
            
                <a href="categorie.php" class="btn btn-secondary btn-md zoom col-2">Précédent</a>
                 <a href="commande.php" class="btn btn-secondary btn-md zoom col-2">Suivant</a>
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
                    <div class="card zoom tcard col-12 col-md-2 mb-2 my-2 mx-3">
                        <img src="asset/images_the_district/food/${plt.image}" class="card-img-top img-fluid card-img timg" alt="${plt.libelle}">
                        <div class="card-body">
                            <p class="card-text">${plt.libelle}</p>
                            <a href="commande.php" class="btn btn-primary d-flex justify-content-center">Commander</a>
                        </div>
                    </div></div>`;
                    divplat.append(card);
                };
            });
        });

    </script>

</body>
</html>
