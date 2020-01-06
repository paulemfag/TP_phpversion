$(function(){
  // Modal qui s'ouvre sur la page forum
  $(document).ready(function () {
    $('#rules').modal('show')
  })
  $('#check').click(function(){
    if($('#check').checked = true){
      //$('#terms').removeAttr('disabled');
      $('#terms').removeAttr('disabled');
      }
    else {
      $('#terms').prop('disabled', true);
    }
  })
})

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
