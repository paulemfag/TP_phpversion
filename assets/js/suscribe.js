$(function () {
    $('#particularItems').hide();
    $('#compositorItems').hide();
    $('#particular').click(function () {
        $('#particularItems').show();
        $('#compositorItems').hide();
    });
    $('#compositor').click(function () {
        $('#particularItems').hide();
        $('#compositorItems').show();
    });
});