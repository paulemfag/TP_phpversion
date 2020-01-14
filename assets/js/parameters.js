$(function (){
        // si le formulaire a déjà été envoyé le réaffiche
    if($('#changeMyPassword').attr('value') === 'alreadySubmittedOnce'){
        $('#changePasswordItems').show();
        $('#parametersMenu').show();
    } else{
        // quand on arrive sur la page n'affiche que le menu
        $('#changePasswordItems').hide();
        $('#parametersMenu').show();
    }
});

// quand on clique sur le lien "Changer mon mot de passe"
$('#changePass').click(function() {
    $('#changePasswordItems').show();
    $('#parametersMenu').show();
});