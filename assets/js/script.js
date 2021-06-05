$(document).ready(function(){
setTimeout(function(){
    $('.title').addClass('T-animated');
},300);
setTimeout(function(){
    $('.diagnosa-box-2').addClass('T-animated');
},600);
setTimeout(function(){
    $('.hasiljawaban').addClass('T-animated');
},900);

setTimeout(function(){
  $('.diagnosa-box').addClass('scaled');
},900);

});



$('#daftar').on("click",function(){
$('.tampilan-1').fadeOut(400);

$('.tampilan-2').fadeIn(400);

});
$('#login').on("click",function(){
$('.tampilan-1').fadeIn(400);

$('.tampilan-2').fadeOut(400);

});
