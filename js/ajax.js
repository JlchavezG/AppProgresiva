$(obtener_registros());
function obtener_registros(Oficios){
  $.ajax({
      url: '../includes/Acciones.php',
      type: 'POST',
      dataType: 'html',
      data: { Oficios: Oficios },
      })
      .done(function(resultado){
          $("#TablaResultado").html(resultado);
        })
}
$(document).on('keyup','#busqueda',function(){
    var valorBusqueda =$(this).val();
    if(valorBusqueda!=""){
       obtener_registros(valorBusqueda);
    }
    else{
        obtener_registros();
    }
});