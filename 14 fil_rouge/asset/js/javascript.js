$(document).ready(function () {

    $("#envoyer").click(function (e) {
       
        e.preventDefault();
        validation();
    });

    function validation() {
       
        var envoi = true;

        var nom = $("#nom").val();
        if (nom === "") {
            envoi = false;
            $("#n").show();
        
        }
        else {
           
            $("#n").hide();

        };
   

        var prenom = $("#prenom").val();
        if (prenom === "") {
            envoi = false;
            $("#p").show();
        }
        else {
            $("#p").hide();
        };


        var email = $("#email").val();
        if (email === "") {
            envoi = false;
            $("#e").show();
        }
        else {
            $("#e").hide();

        };


        var telephone = $("#telephone").val();
        if (telephone === "") {
            envoi = false;
            $("#t").show();
        }
        else {
            $("#t").hide();

        };


        var message = $("#message").val();
        if (message === "") {
            envoi = false;
            $("#m").show();
        }
        else {
            $("#m").hide();
    
        };
       

    };
    $("#envoie").click(function (e) {
    
             e.preventDefault();
        valide();
    });
    function valide(){

        

    var nomp = $("#nomPrenom").val();
    if (nomp === "") {
        envoi = false;
        $("#n_manquant").show();
    }
    else {
        $("#n_manquant").hide();
        alert("f");
    }
    console.log(nomp);
    var emails = $("#emails").val();
    if (emails === "") {
        envoi = false;
        $("#email_manquant").show();
    }
    else {
        $("#email_manquant").hide();
    }

    var tel = $("#telephones").val();
    if (tel === "") {
        envoi = false;
        $("#telephone_manquant").show();
    }
    else {
        $("#telephone_manquant").hide();
    }

    var adresses = $("#adresses").val();
    if (adresses === "") {
        envoi = false;
        $("#adresse_manquant").show();
    }
    else {
        $("#adresse_manquant").hide();
    }

    if (envoi) {
        $("form")[0].submit();
    }
};
});
