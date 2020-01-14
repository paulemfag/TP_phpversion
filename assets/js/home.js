$(document).ready(
    // test si un formulaire a déjà été envoyé
    function test() {
        // si formulaire s'inscrire envoyé (formulaire login et texte cachés quand on arrive sur la page)
        if ($('#suscribe').attr('value') === 'alreadySubmittedOnce') {
            $('#suscribeItems').show();
            $('#connectItems').hide();
            $('#presentationText').hide();
            $('#forgottenPassword').hide();
        } // si formulaire login envoyé (formulaire s'inscrire et texte cachés quand on arrive sur la page)
        else if ($('#login').attr('value') === 'alreadySubmittedOnce') {
            $('#suscribeItems').hide();
            $('#connectItems').show();
            $('#presentationText').hide();
            $('#forgottenPassword').hide();
        }
        // formulaires cachés et texte affiché quand on arrive sur la page
        else {
            $('#suscribeItems').hide();
            $('#connectItems').hide();
            $('#presentationText').show();
            $('#forgottenPassword').hide();
        }
    }
);

// quand on clique sur le bouton se connecter affiche le formulaire de connexion
$('#connectbtn').click(function() {
    $('#suscribeItems').hide();
    $('#connectItems').show();
    $('#presentationText').hide();
    $('#forgottenPassword').hide();
});

// quand on clique sur "Je n'ai pas de compte" affiche le formulaire d'inscription
$('#noAccount').click(function() {
    $('#suscribeItems').show();
    $('#connectItems').hide();
    $('#presentationText').hide();
    $('#forgottenPassword').hide();
});

// quand on clique sur "Mot de passe oublié" affiche le formulaire de récupération de MDP
$('#lostPassword').click(function() {
    $('#suscribeItems').hide();
    $('#connectItems').hide();
    $('#presentationText').hide();
    $('#forgottenPassword').show();
});

// quand on clique sur le bouton s'inscrire affiche le formulaire d'inscription
$('#suscribebtn').click(function() {
    $('#suscribeItems').show();
    $('#connectItems').hide();
    $('#presentationText').hide();
    $('#forgottenPassword').hide();
});

// quand on clique sur le nom du site affiche le texte de présentation
$('#FILL').click (function() {
    $('#suscribeItems').hide();
    $('#connectItems').hide();
    $('#presentationText').show();
    $('#forgottenPassword').hide();
});

$('#suscribe').click (function() {
    var radioValue = $("input[name='accounttype']:checked").val();
    // si c'est un particulier
    if (radioValue === '1') {
        $('#suscribers').attr('action', 'suscribeparticular.php');
    }
    // si c'est un compositeur
    else if (radioValue === '2'){
        $('#suscribers').attr('action', 'suscribecompositor.php');
    }
});
