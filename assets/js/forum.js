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
