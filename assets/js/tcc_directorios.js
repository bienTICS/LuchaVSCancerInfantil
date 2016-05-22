$(document).ready(function (){
    $('.tagsinput').tagsinput();
    $('.bootstrap-tagsinput').css('width','100%');
    $('.form-uma').submit(function (e){
        e.preventDefault();
        $.ajax({
            url: base_url+"inicio/insert_uma",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado.');
                    setTimeout(function (){
                        location.replace(base_url+'inicio/directorio_uma');
                    },1000)
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve();
            }
        })
    })
    $('.form-osc').submit(function (e){
        e.preventDefault();
        $.ajax({
            url: base_url+"inicio/insert_osc",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado.');
                    setTimeout(function (){
                        location.replace(base_url+'inicio/directorio_osc');
                    },1000)
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve();
            }
        })
    })
    $('.fa-trash-o').click(function (e){
//        var el=$(this).attr('data-id');
//        if(confirm('¿DESEA ELIMINAR ESTE REGISTRO?')){
//            $.ajax({
//                url: base_url+"inicio/eliminar_diccionario",
//                dataType: 'json',
//                type: 'POST',
//                data:{'id':el},
//                beforeSend: function (xhr) {
//                    msj_success_noti('Eliminando registro...')
//                },success: function (data, textStatus, jqXHR) {
//                    if(data.accion=='1'){
//                        msj_success_noti('Registro guardado correctamente');
//                        $('#'+el).remove();
//                    }
//                },error: function (jqXHR, textStatus, errorThrown) {
//                    msj_error_serve()
//                }
//            })
//        }
    })
    $.ajax({
        url: base_url+"inicio/listar_estados",
        dataType: 'json',
        success: function (data, textStatus, jqXHR) {
            $('.estado_id').html(data.option);
        },error: function (jqXHR, textStatus, errorThrown) {
            msj_error_serve();
        }
    })
})