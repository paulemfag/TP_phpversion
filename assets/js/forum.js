    $(function(){
    //empêche de fermer la modal // click backdrop
    $('#rules').modal({backdrop: 'static', keyboard: false});
    if (localStorage.getItem('rulesAuthorization') === 'true'){
      $('#rules').modal('hide');
    } else {
      $('#rules').modal('show');
    }
  $('#rulesDecline').click(function(){
    location.href = "accueil.php";
  });
  $('#rulesAllow').click(function(){ 
      localStorage.setItem('rulesAuthorization', 'true');
  });
});
