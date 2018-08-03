function iniciar_sesion(){
    let inputMail = $('#correo_log').val();
    let idFrom = 'form_login';
    if (isMail(inputMail)) {
        $.ajax({
            url: 'login/home/validar',
            type: 'POST',
            dataType: 'json',
            data: $('#form_login').serialize(),
            beforeSend: function() {
                disa_form(idFrom);
                $(".spin_back").css("opacity", 0.2);
                $("#icon_spin_load").css({"display": "block"});
            },
            success: function(data) {
                $(".spin_back").css("opacity", 1);
                $("#icon_spin_load").css({"display": "none"});
                if (data.success == true) {

                    setTimeout(function() {window.location.replace('dashboard/inicio');}, 1000);
                }else if (data.success == "RESTRINGIDO"){


                }else{

                    ena_form(idFrom);
                }
            }
        });
    }else{

    }

}

// $('#alert_login_danger').css('display', 'none');
// $('#alert_login_warning').css('display', 'none');
// $('#alert_login_success').css('display', 'block');
// $('#alert_login_danger').css('display', 'none');
// $('#alert_login_acceso').css('display', 'block');
// $('#alert_login_danger').css('display', 'block');
// $('#alert_login_warning').css('display', 'block');