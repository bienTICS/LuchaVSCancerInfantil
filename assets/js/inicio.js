$(document).ready(function (){
    $('body table').footable();
    $('body #example_length ,.DTTT ').addClass('hidden');  
    $('#retrievingfilename').html5imageupload({
        onAfterProcessImage: function() {
                $('#filename').val($(this.element).data('name'));
                $('#check-img').val('Nueva');
        },
        onAfterCancel: function() {
                $('#filename').val('');
        }
    });
    $('.fecha-calendar,.fecha_calendar').datepicker({
        autoclose: true,
        format: 'yyyy/mm/dd',
        todayHighlight: true
    });
    $('#save').html5imageupload({
        onSave: function(data) {
                console.log(data);
        }
    });
    $('.upload-archivo').fileinput({
        language: 'es'
    });
    $('body .fileinput-upload').hide();
    $('body .fecha').html(fechaActual());
    function fechaActual(){
        var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"); 
        var f=new Date(); 
        return diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
    }
    setInterval(function() {
        var seconds = new Date().getSeconds();
        $('.segundo').html((seconds < 10 ? "0" : "") + seconds);
    }, 1000);
    setInterval(function() {
        var minutes = new Date().getMinutes();
        $('.minuto').html((minutes < 10 ? "0" : "") + minutes);
    }, 1000);
    setInterval(function() {
        var hours = new Date().getHours();
        $('.hora').html((hours < 10 ? "0" : "") + hours);
    }, 1000);
    //$('body input[name=csrf_token]').val($.cookie('csrf_cookie'))
        
})