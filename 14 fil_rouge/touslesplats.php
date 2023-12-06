

        <?php include 'header.php';?> <!--entête de page-->

        
      
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

   
    <script>

        $(document).ready(function () { // s'exécutera une fois le document prêt

            $.getJSON('asset/json/json.json', function (data) { // parcour le dossier json

               
               
              
                
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
                                        <a href="#" class="btn btn-light d-flex justify-content-center">Quantité: 1</a>
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
