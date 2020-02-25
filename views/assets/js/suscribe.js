$(function () {
    setInterval(function () {
        //récupération de l'option sélectionné
        var option = $('#software option:selected').text();
        // Si le style choisi est autre affiche le champ autre
        if (option === 'Autre') {
            $('#otherSoftware').show();
        }
        // si l'option n'est pas égale à Autre (quand on change de 'autre' à une autre option)
        else if (option !== 'Autre') {
            $('#otherSoftware').hide();
        }
    }, 1);
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