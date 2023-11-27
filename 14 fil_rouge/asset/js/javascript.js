$(document).ready(function () {

    $("#envoyer").click(function () {

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


    }
});
