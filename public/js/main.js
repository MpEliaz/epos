
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
