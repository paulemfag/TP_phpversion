// (function(){
//   $('#suscribers form').submit(function(e){
//     alert("Ory");
//     e.preventDefault();
//   });
// })

$('#suscribe').click(function(){
  var pseudo = $('#pseudo2').val();
  var mailbox = $('#mailbox1').val();
  var pass1 = $('#password1').val();
  var pass2 = $('#password2').val();
    var checkPseudo = /^[A-Z|a-zéèçàïîêëôöûü]+([0-9|A-Z|a-zéèçàïîêëôöûü])*$/.test(pseudo);
    console.log(checkPseudo);
    var checkMailBox = /^([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/.test(mailBox);
    console.log(checkMailBox);
    var checkPassword = /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/.test(pass1);
    console.log(checkPassword);
  // if (checkPseudo && checkMailBox && checkPassword == true){
  // result =
  // }
  // else{
  // epreventDefault('#suscribe')
  // }
});

//   $('form').on('submit', function(event){
//     event.preventDefault();
//     var pseudo = $('#pseudo').val();
//     var mailbox = $('#mailbox').val();
//     var password = $('#password').val();
//     var
//
//



//   $('#login').click(function(){
//     var pseudo = $('#pseudo').val();
//     var mailbox = $('#mailbox').val();
//     var password = $('#password').val();
//   $('#pseudo').keyup(function pseudoCheck() {
//     let input = ($(this).val()).trim()
//     let pattern = /^[a-zA-Z.'-]*$/;
//     if (pattern.test(input) && input != '') {
//       $('#login').removeAttr('disabled')
//     } else {
//       $('#login').attr('disabled')
//     }
//   });
// })

//test adresse mail
//
// $('#mailBox').keyup(function mailCheck() {
//   let input = ($(this).val()).trim()
//   let pattern = /^([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
//   if (pattern.test(input) && input != '') {
//     $(this).css('border', '2px solid green')
//   } else {
//     $(this).css('border', '3px solid red')
//   }
// });
//
// //test telephone
//
// $('#Phone').keyup(function phoneCheck() {
//   let input = ($(this).val()).trim()
//   let pattern = /^([0])([0-9]{9})*$/;
//   if (pattern.test(input) && input != '') {
//     $(this).css('border', '2px solid green')
//   } else {
//     $(this).css('border', '3px solid red')
//   }
// });
// })
