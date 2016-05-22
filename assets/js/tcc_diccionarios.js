$(document).ready(function (){
    $('.btn-add-diccionario').click(function (){
        bootbox.dialog({    
            title: "Agregar palabras al diccionario",
            message: '<div class="">'+
                        '<div class="row" style="padding-left:10px;padding-right:10px">'+
                            '<div class="col-md-12" >'+
                                '<div class="md-form-group">'+
                                    '<input class="md-input" id="diccionario_palabra">'+
                                    '<label>Nombre de palabra</label>'+
                                '</div>'+
                                '<div class="md-form-group">'+
                                    '<textarea class="md-input" rows="4" id="diccionario_descripcion"></textarea>'+
                                    '<label>Descripción</label>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>',
            buttons: {
                success: {
                    label: "Aceptar",
                    className: "md-btn md-raised m-b btn-fw blue waves-effect",
                    callback: function() {
                        if($('#diccionario_palabra').val()!=''){
                            $.ajax({
                                url: base_url+"inicio/insert_diccionario",
                                dataType: 'json',
                                type: 'POST',
                                data:{
                                    'diccionario_palabra':$('#diccionario_palabra').val(),
                                    'diccionario_descripcion':$('#diccionario_descripcion').val()
                                },beforeSend: function (xhr) {
                                    msj_success_noti('Guardando registro...');
                                },success: function (data, textStatus, jqXHR) {
                                    if(data.accion=='1'){
                                        msj_success_noti('Registro guardado correctamente');
                                        setTimeout(function (){
                                            location.reload();
                                        },1000)
                                    }
                                },error: function (jqXHR, textStatus, errorThrown) {
                                    msj_error_serve()
                                }
                            })
                        }

                    }
                }
            }
        });
        $('.modal-dialog').css('width','30%');
        $('.modal-header').addClass('teal');
        $('.modal-title').css({
            'color'      : 'white',
            'text-align' : 'left'
        });
        $('.close').css({
            'color'     : 'white',
            'font-size' : 'x-large'
        });
    })
    $('.fa-trash-o').click(function (e){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR ESTE REGISTRO?')){
            $.ajax({
                url: base_url+"inicio/eliminar_diccionario",
                dataType: 'json',
                type: 'POST',
                data:{'id':el},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro...')
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Registro guardado correctamente');
                        $('#'+el).remove();
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
})