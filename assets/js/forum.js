    $(function(){
    //empêche de fermer la modal // click backdrop
    $('#rules').modal({backdrop: 'static', keyboard: false});
    if (! localStorage.getItem('rulesAuthorization')){
      $('#rules').modal('show');
    } else {
      $('#rules').modal('hide');
    }
  $('#rulesDecline').click(function(){
    location.href = "accueil.php";
  });
  $('#rulesAllow').click(function(){ 
      localStorage.setItem('rulesAuthorization', 'true');
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
