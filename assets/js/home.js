$(document).ready(
  // formulaires cachés et texte affiché quand on arrive sur la page
  function FormsDefault() {
  $('#suscribeItems').hide();
  $('#connectItems').hide();
});
// quand on veux s'inscrire ( vérifie que le formulaire de connection et le texte sont cachés et affiche celui d'inscription)
$('#suscribebtn').click(function() {
  $('#connectItems').hide();
  $('#suscribeItems').show();
  $('#presentationText').hide();
});
// quand on veux se connecter ( vérifie que le formulaire d'inscription et le texte sont cachés et affiche celui de connexion)
$('#connectbtn').click(function() {
  $('#suscribeItems').hide();
  $('#connectItems').show();
  $('#presentationText').hide();
});

// Choix du type de compte
/*$('#suscribe').click (function() {
var radioValue = $("input[name='type']:checked").val();
// si c'est un compositeur
  if (radioValue == 'compositor'){
    $('#suscribers').attr('action', 'suscribecompositor.php');
  }
  // si c'est un particulier
  else if (radioValue == 'particular') {
    $('#suscribers').attr('action', 'suscribeparticular.php');
  }
  // sinon
  else {
    $('#suscribers').attr('action', '#');
  }
})*/
