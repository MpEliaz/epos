
function activar_producto($id)
{
    $.ajax({
        method: "POST",
        url: "productos/activar",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: { id: $id }
    })
        .done(function( msg ) {
            console.log(msg);
            location.reload();
        });

}

function desactivar_producto($id)
{
    $.ajax({
        method: "POST",
        url: "productos/desactivar",
        headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: { id: $id }
    })
        .done(function( msg ) {
            console.log(msg);
            location.reload();
        });

}

$('.fecha-picker').datepicker({
    language: "es"
});

$(function(){
    $("#productos-tabla").tablesorter();
});

$("#margen").keyup(function(){

    precio_venta = parseInt($("#precio_costo").val())*((parseInt($("#margen").val())/100)+1);
    if(precio_venta!=0 && !isNaN(precio_venta) && precio_venta!="")
    {
        $("#precio_venta").val(precio_venta);
    }

});

$("#precio_venta").keyup(function(){

    margen = parseInt($("#precio_venta").val())-parseInt($("#precio_costo").val());
    margen = margen*100/parseInt($("#precio_costo").val())
    if(margen!=0 && !isNaN(margen) && margen!="")
    {
        $("#margen").val(margen);
    }

});