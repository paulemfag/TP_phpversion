$(function () {
    //récupère valeur des radios boutons
    var radioValue = $("input[name='accounttype']:checked").val();
    //récupère la valeur du bouton 'submitSuscribeCompositor'
    submitSuscribeCompositor = $('#submitSuscribeCompositor').val();
    // si la valeur du bouton 'submitSuscribeCompositor' est 'alreadySubmittedOnce' réaffiche le formulaire compositeur
    if ($('#submitSuscribeCompositor').attr('value') === 'alreadySubmittedOnce') {
        $('#compositor').attr('checked', true);
        $('#particularItems').hide();
        $('#compositorItems').show();
        var radiovalue = $("input[name='accounttype']").val();
    }
    // si la valeur du bouton 'submitSuscribeParticular' est 'alreadySubmittedOnce' réaffiche le formulaire particulier
    if ($('#submitSuscribeParticular').attr('value') === 'alreadySubmittedOnce') {
        $('#particular').attr('checked', true);
        $('#particularItems').show();
        $('#compositorItems').hide();
        var radiovalue = $("input[name='accounttype']").val();
    }
    // si l'attribut du radion bouton 'particular' est check réaffiche le formulaire particulier
    if ($('#particular').attr('checked') === ('checked')) {
        $('#particularItems').show();
        $('#compositorItems').hide();
        // si l'attribut du radion bouton 'compositor' est check réaffiche le formulaire compositeur
    }
    if ($('#compositor').attr('checked') === ('checked')) {
        $('#particularItems').hide();
        $('#compositorItems').show();
    }
    // sinon n'affiche que les radios boutons
    else {
        $('#particularItems').hide();
        $('#compositorItems').hide();
    }
    // quand on choisis le type de compte 'Particulier' affiche le formulaire particulier
    $('#particular').click(function () {
        $('#particularItems').show();
        $('#compositorItems').hide();
    });
    // quand on choisis le type de compte 'Compositeur' affiche le formulaire compositeur
    $('#compositor').click(function () {
        $('#particularItems').hide();
        $('#compositorItems').show();
    });

    /*$( "#compositorForm" ).submit(function( event ) {
        ($('#submitSuscribeCompositor').attr('value') === 'alreadySubmittedOnce');
    });*/
});