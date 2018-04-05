var modal = $('#modal');
var modal_edit = $('#modal-edit');
function showModal(){
  modal.css("display", "block");
}
function hideModal(){
  $('.cerrar').click(function(){
    modal.css("display","none");
  });
}

function showModalEdit(){
  modal_edit.css("display", "block");
}
function hideModalEdit(){
  $('.cerrar-edit').click(function(){
    modal_edit.css("display","none");
  });
}
