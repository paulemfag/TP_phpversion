$(function (){
        // si le formulaire changement de mot de passe a déjà été envoyé le réaffiche
    if($('#changeMyPassword').attr('value') === 'alreadySubmittedOnce'){
        $('#changePasswordItems').show();
        $('#parametersMenu').show();
        $('#removeAccountItems').hide();
        // si le formulaire suppression du compte a déjà été envoyé le réaffiche
    } else if($('#removeMyAccount').attr('value') === 'alreadySubmittedOnce' ){
        $('#changePasswordItems').hide();
        $('#parametersMenu').show();
        $('#removeAccountItems').show();
    } else{
        // quand on arrive sur la page n'affiche que le menu
        $('#changePasswordItems').hide();
        $('#parametersMenu').show();
        $('#removeAccountItems').hide();
    }
});

// quand on clique sur le lien "Changer mon mot de passe"
$('#changePass').click(function() {
    $('#changePasswordItems').show();
    $('#parametersMenu').show();
    $('#removeAccountItems').hide();
});

// quand on clique sur le lien "Supprimmer mon compte"
$('#removeAccount').click(function() {
    $('#changePasswordItems').hide();
    $('#parametersMenu').show();
    $('#removeAccountItems').show();
});
