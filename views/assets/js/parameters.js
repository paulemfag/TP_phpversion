$(function () {
    // si le formulaire changement de mot de passe a déjà été envoyé le réaffiche
    if ($('#changeMyPassword').attr('value') === 'alreadySubmittedOnce') {
        $('#changePasswordItems').show();
        $('#parametersMenu').show();
        $('#removeAccountItems').hide();
        // si le formulaire suppression du compte a déjà été envoyé le réaffiche
    } else if ($('#removeMyAccount').attr('value') === 'alreadySubmittedOnce') {
        $('#changePasswordItems').hide();
        $('#parametersMenu').show();
        $('#removeAccountItems').show();
    } else {
        // quand on arrive sur la page n'affiche que le menu
        $('#changePasswordItems').hide();
        $('#parametersMenu').show();
        $('#removeAccountItems').hide();
    }
});

// quand on clique sur le lien "Changer mon mot de passe"
$('#changePass').click(function () {
    $('#changePasswordItems').show();
    $('#parametersMenu').show();
    $('#removeAccountItems').hide();
});

// quand on clique sur le lien "Supprimer mon compte"
$('#removeAccount').click(function () {
    $('#changePasswordItems').hide();
    $('#parametersMenu').show();
    $('#removeAccountItems').show();
});

// fonction qui redirige vers la page "index.php"
function redir() {
    self.location.href = 'index.php'
}

//récupération de la valeur du bouton "supprimer mon compte"
var buttonValue = $('#removeMyAccount').val();
// si la valeur du bouton est égale à 'isOk' appelle la fonction de redirection
if (buttonValue === 'isOk') {
    redir();
}


