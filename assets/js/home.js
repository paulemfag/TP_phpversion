$(document).ready(
    // test si un formulaire a déjà été envoyé
    function test() {
        // si formulaire s'inscrire envoyé (formulaire login et texte cachés quand on arrive sur la page)
        if ($('#suscribe').attr('value') == 'alreadySubmittedOnce') {
            $('#suscribeItems').show();
            $('#connectItems').hide();
            $('#presentationText').hide();
        } // si formulaire login envoyé (formulaire s'inscrire et texte cachés quand on arrive sur la page)
        else if ($('#login').attr('value') == 'alreadySubmittedOnce') {
            $('#suscribeItems').hide();
            $('#connectItems').show();
            $('#presentationText').hide();
        }
        // formulaires cachés et texte affiché quand on arrive sur la page
        else {
            $('#suscribeItems').hide();
            $('#connectItems').hide();
            $('#presentationText').show();
        }
    }
);

// quand on clique sur le bouton se connecter affiche le formulaire de connexion
$('#connectbtn').click(function() {
    $('#suscribeItems').hide();
    $('#connectItems').show();
    $('#presentationText').hide();
});

// quand on clique sur le bouton s'inscrire affiche le formulaire d'inscription
$('#suscribebtn').click(function() {
    $('#suscribeItems').show();
    $('#connectItems').hide();
    $('#presentationText').hide();
});

// Choix du type de compte
$('#suscribe').click (function() {
    var radioValue = $("input[name='accounttype']:checked").val();
    // si c'est un particulier
    if (radioValue == '1') {
        $('#suscribers').attr('action', 'suscribeparticular.php');
    }
    // si c'est un compositeur
    else if (radioValue == '2'){
        $('#suscribers').attr('action', 'suscribecompositor.php');
    }
})
