$(function () {
    var radioValue = $("input[name='accounttype']:checked").val();
    if (radioValue === '1') {
        $('#particularItems').show();
        $('#compositorItems').hide();
    } else if (radioValue === '2') {
        $('#particularItems').hide();
        $('#compositorItems').show();
    } else {
        $('#particularItems').hide();
        $('#compositorItems').hide();
    }
    $('#particular').click(function () {
        $('#particularItems').show();
        $('#compositorItems').hide();
    });
    $('#compositor').click(function () {
        $('#particularItems').hide();
        $('#compositorItems').show();
    });
});