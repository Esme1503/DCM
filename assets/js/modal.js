var modal = $('#modal');
function showModal(){
  modal.css("display", "block");
}
function hideModal(){
  $('.cerrar').click(function(){
    modal.css("display","none");
  });
}
