
$(".pop-up__a").hover(function(){
  $(".pop-up-ventt__a").slideToggle();
});



$(".busc-avanzada").click(function(){
  $(".busqueda-avanzada__a").slideDown();
});

$(".buscc-basicc__a").click(function(){
  $(".busqueda-avanzada__a").slideUp();
});





$(".enviar-postu-ventt1__a").click(function(){
  $(".space-ventanaaa1__a").fadeIn();
  return false
});

$(".buttt-close1__a").click(function(){
  $(".space-ventanaaa1__a").fadeOut();
  return false
})
$(".cancelarrr-cuenta1__a").click(function(){
  $(".space-ventanaaa1__a").fadeOut();
  return false
})


$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})


    
  