<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>finaliser</title>
</head>

<body>

    <div class="container-fluid ">
       
        <?php include 'header.php';?> <!--entête de page-->
                    
        <div>

            <video autoplay loop muted playsinline poster="asset/images_the_district/burgervideo.mp4" class="video"> <!--video--> 
                <source src="asset/images_the_district/burgervideo.mp4" type="video/mp4">
            </video>

        </div>   
        
        <div class="d-flex justify-content-center"> <!--centrer le tittre-->

            <h1>Félicitations commande finaliser</h1> <!--tittre-->

        </div><br> 

        <div class="d-flex justify-content-around"> <!--l'espacement autour du texte et identique-->

            <p>La commande est en cours...<br> une fois la préparation fini le livreur vous contactera merci et à bientôt.</p>

        </div>


        <?php include 'footer.php';?> <!--bas de page--> 

    </div>



    
</body>
</html>
