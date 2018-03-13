$(document).ready(function(){
  _slick_create();
  $(window).smartresize(function(){
    $('.responsive').slick('unslick');
    _slick_create();
  });
  function _slick_create(){
    var width = window.innerWidth || document.body.clientWidth;
    if(width < 480){
      $('.responsive').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    }
    else if(width < 1500 & width > 480){
      $('.responsive').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    }
    else{
      $('.responsive').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    }
    return false;
  }
});

function calcular(nombre,ap_pater,ap_mater, fecha){
  if(nombre != "" & ap_pater != "" & ap_mater != "" & fecha != ""){
    var rfc, cad_fecha, vocal,cont=0;
    var vocales = ["a","e","i","o","u"];
    var arreglo = ap_pater.substring(1,ap_pater.length).split('');
    for(var i=0;i<arreglo.length;i++){
      for(var j=0;j<vocales.length;j++){
        if(arreglo[i]==vocales[j] & cont==0){
          vocal = arreglo[i];
          cont=cont+1;
        }
      }
    }
    cad_fecha = fecha.split("-", fecha.length);
    rfc = ap_pater.substring(0,1) + vocal + ap_mater.substring(0,1) + nombre.substring(0,1)+ cad_fecha[0].substring(2,4)+cad_fecha[1]+cad_fecha[2];
    rfc= rfc.toUpperCase();
    document.getElementById('rfc').value = rfc;
  }
}
