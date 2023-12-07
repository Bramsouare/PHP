
        <?php include 'header.php';?> <!--entête de page-->

        ///// MODIF MOBILE A FAIRE

        <div class="d-none d-lg-block mx-auto">


            <form action="formulaire.php" method="POST">

                <div class="row mt-5"> <!--les éléments sont aligner sur la même ligne-->

                    <div class="form-group col-6 "> <!--nom-->
                        <label for="nom">nom</label>
                        <input type="text" class="form-control" id="nom"  name="nom">
                        <div id="n" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ce champ est obligatoire !</strong> 
                        </div><br>
                    </div>
                    <div class="form-group col-6 ">
                        <label for="prenom">Prénom</label> <!--prenom-->
                        <input type="text" class="form-control" id="prenom"  name="prenom">
                        <div id="p" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ce champ est obligatoire !</strong> 
                        </div><br>
                    </div>
                </div>
                <div class="row mt-4">

                    <div class="form-group col-6">
                        <label for="email">Email</label> <!--email-->
                        <input type="email" class="form-control"  id="email" name="email">
                        <div id="e" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ce champ est obligatoire !</strong> 
                        </div><br>
                    </div>
                    <div class="form-group col-6">
                        <label for="telephone">Téléphone</label> <!--telephone--> 
                        <input type="tel" class="form-control" id="telephone"  name="telephone">
                        <div id="t" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Ce champ est obligatoire !</strong> 
                        </div><br>
                    </div>
                </div>
                <div class="form-group mt-5 mb-3">

                    <label for="message">Message :</label> <!--message-->
                    <textarea class="form-control" id="message"  name="message"></textarea>
                    <div id="m" style="display: none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ce champ est obligatoire !</strong> 
                    </div><br>
                </div>
                <button type="submit" id="envoyer" name="envoyer" class="btn btn-light btns btn-md zoom">Envoyer</button> <!--bouton-->
            </form>
            <div class="d-flex justify-content-around">
                <a href="touslesplats.php" class=" btn btn-light btn-lg zoom col-5 col-md-1 btns">Précédent</a>   
            </div>


        <?php include 'footer.php'; ?> <!--bas de page-->
