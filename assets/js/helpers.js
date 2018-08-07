class Help {
    userNotify(msg, type = 'info', element = 'alert'){
        let style = 'alert alert-'+type;
        //Clear div
        document.getElementById(element).setAttribute("class","");
        document.getElementById(element).innerHTML = '';
        //set content
        document.getElementById(element).setAttribute("class",style);
        document.getElementById(element).innerHTML += msg;
    }
}

//ToDo - Funciones a Migrar a la clase Help
function disa_form(id){
    var id_form = id.toString();
    $("#"+id_form+" input").prop( "disabled", true );
    $("#"+id_form+" button").prop( "disabled", true );
}
function ena_form(id){
    var id_form = id.toString();
    $("#"+id_form+" input").prop( "disabled", false );
    $("#"+id_form+" button").prop( "disabled", false );
    $("#"+id_form)[0].reset();
}
function ConvertidorComas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
function EliminarComas(num){
    var n = num+'';
    return parseFloat(n.replace(",",""));
}
function ValidarCorreo(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function isMail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function desactivar_inputs(id_contenido){
    var id = id_contenido.toString();
    $("#"+id+" :input").prop("disabled", true);
}
function activar_inputs(id_contenido){
    var id = id_contenido.toString();
    $("#"+id+" :input").prop("disabled", false);
}
function mensaje_gbl(mensaje,tipo,icono,ruta){
    var msj = "";
    msj += "<div class='col-xs-12 center'>";
    msj += "<div class='alert alert-"+tipo+" btn-sm' id='alert_login_danger'><strong><i class='ace-icon fa fa-"+icono+"'></i> "+mensaje+"</strong></div>";
    msj += "</div>"
    $("#"+ruta+"").html(msj);
}
function mover_vista_top(contenedor){
    $('html,body').animate({
        scrollTop: $("#"+contenedor+"").offset().top
    }, 1000);
}
function separar_fecha_inicio(str){
    var the_string = str.toString();
    var parts = the_string.split(' - ');
    return the_text = parts[0];
}
function separar_fecha_final(str){
    var the_string = str.toString();
    var parts = the_string.split(' - ');
    return the_text = parts[1];
}
function calc_fecha_meses(fecha1,fecha2){
    //FUNCIONA CON FECHA NORMAL 'MM/DD/YYYY'
    // var date1 = new Date(fecha1);
    // var date2 = new Date(fecha2);
    // var timeDiff = Math.abs(date2.getTime() - date1.getTime());
    // var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    // return diffDays;
    //FUNCIONA SOLO CON EL PLUGIN MOMENT.JS
    var a = moment(fecha1,'DD/MM/YYYY');
    var b = moment(fecha2,'DD/MM/YYYY');
    var diffDays = b.diff(a, 'months');
    // var diffDays = b.diff(a, 'days');
    return diffDays;
}
function SelectAjaxRefresh(valor,idselect){
    //FUNCIONA SOLO CON EL PLUGIN DATEPICKER
    $('#'+idselect+' option[value='+valor+']').prop('selected', true);
    $("#"+idselect).selectpicker('refresh');
}
function message_load(mensaje,tipo,icono,ruta,hide){
    var msj = "";
    msj += "<div class='col-xs-12 center'>";
    msj += "<div class='alert alert-"+tipo+" btn-sm' id='alert_login_danger'><strong><i class='ace-icon fa fa-"+icono+"'></i> "+mensaje+"</strong></div>";
    msj += "</div>"
    $("#"+hide+"").fadeOut("slow");
    $("#"+ruta+"").html(msj);


}
function message_hide(ruta,hide){
    $("#"+ruta+"").fadeOut("slow");
    $("#"+hide+"").fadeIn("slow");
}
function message_box(data, time, options) {
    if (data == 'load') {
        data = '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Loading...</div>';
    }
    bootbox.dialog({
        message: data,
        closeButton: options
    });
    if (time > 0) {
        setTimeout(function () {
            location.reload();
        }, time);
    }
}
function message_sync(title, text, image_url, time, class_name) {
    $.gritter.add({
        title: title,
        text: text,
        image: image_url,
        sticky: false,
        time: time,
        class_name: class_name
    });
}
function toDate(selector) {
    var from = selector.split("/");
    return new Date(from[2], from[1] - 1, from[0]);
}
function toDateString(selector) {

    var from = selector.split("/");
    var result =from[1]+'/'+from[0]+'/'+from[2];
    return result.toString();

}
function calc_fecha_dia(fecha1,fecha2) {
    var fecha1 =toDate(fecha1);
    var fecha2 =toDate(fecha2);
    var diasDif = fecha2.getTime() - fecha1.getTime();
    var dias = Math.round(diasDif/(1000 * 60 * 60 * 24));
    return dias;
}
function hoy() {
    var hoy = new Date();
    var dd = hoy.getDate();
    var mm = hoy.getMonth()+1; //hoy es 0!
    var yyyy = hoy.getFullYear();
    hoy = yyyy+'-'+mm+'-'+dd;
    return hoy;
}
function div_agregar(text) {
    //$('#'+div).show(300);
    $('#titulo_div').html(text);
    $("#form")[0].reset();
    $('#div_btn_edit').hide();
    $('#div_btn_save').show();
    $('#selectlive_1').selectpicker('refresh');
}

