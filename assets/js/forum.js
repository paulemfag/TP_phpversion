$(function(){
    $('#rules').modal({backdrop: 'static', keyboard: false});
  // Modal réglement qui s'ouvre quand on arrive sur la page
    $('#rules').modal('show');
    // empêche de fermer la modal
    $('#rules').modal({backdrop: 'static', keyboard: false});
    if (typeof(Storage) !== "undefined") {
    if (! localStorage.getItem('rulesAuthorization')){
      $('#rules').modal('show');
    } else {
      $('#rules').modal('hide');
    }
  }
  $('#rulesDecline').click(function(){
    location.href = "accueil.php";
  });
  $('#rulesAllow').click(function(){
    if (typeof(Storage) !== "undefined") {
      localStorage.setItem('rulesAuthorization', 'true');
    } else {
      alert('Le stockage local n\'est pas disponible sur votre navigateur.');
    }
  });
});
 // $('#check').click(function(){
 //   if($('#check').checked = true){
      //$('#terms').removeAttr('disabled');
//      $('#terms').removeAttr('disabled');
//      }
//    else {
//      $('#terms').prop('disabled', true);
//    }
//  })


//   setInterval(function(){
//   }, 3000);

// validation réglement
// function check() {
//   if(document.getElementById('#check').checked = true){
//     $('#terms').prop('disabled', false);
//   } else {
//     $('#terms').prop('enabled', true);
//   }
// };
