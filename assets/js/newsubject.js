$(function () {
    //récupération de la date et l'heure toute les secondes
    setInterval(function(){
        var date = new Date();
        var heure = date.getHours();
        if (heure < 10) {
            heure = "0" + heure;
        }
        var minutes = date.getMinutes();
        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        month = date.getMonth() + 1;
        if (month < 10) {
            month = '0' + month;
        }
        // format de la date et de l'heure
        date = (date.getFullYear() + '-' + month + '-' + date.getDate() + ' ' + heure + ":" + minutes);
        // ajout de la valeur à l'input hidden
        $('#dateOfCreation').attr('value', date);
    }, 1000);
});
