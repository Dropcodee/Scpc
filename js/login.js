$(function(){
 
    $('.login').load('http://localhost/Convo/index.php');
});
// $(document).ready(function(){
//     // $('#first').show();
//     // $('#second').hide();
//     // To load Login form
//     $('#signup').click(function(){
//         $('#first').fadeOut("slow", function(){
//             $("#second").fadeIn("slow");
//         });
//     });

//     //To load signup form
//     $('#signin').click(function(){
//         $('#first').fadeIn("slow", function(){
//             $('#second').fadeOut('slow');
//         });
//     });
// });
   var login = $(this).val();
    $(document).on('click', '.login', function(){
        $.post('http://localhost/Convo/index.php', {login:login}, function(data){
            $('.login').html(data);
        });
    });