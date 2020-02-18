$(function () {
    // si l'attribut du radion bouton 'particular' est check affiche le formulaire particulier
    if ($('#particular').attr('checked') === ('checked')) {
        $('#particularItems').show();
        $('#compositorItems').hide();
    }
    // si l'attribut du radion bouton 'compositor' est check affiche le formulaire compositeur
    if ($('#compositor').attr('checked') === ('checked')) {
        $('#particularItems').hide();
        $('#compositorItems').show();
    }
});