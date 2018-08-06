class Auth extends help {
    login() {
        $.ajax({
            url: 'validateLogin',
            type: 'POST',
            dataType: 'json',
            data: $('#fromLogin').serialize(),
            beforeSend: function(xhr, textStatus) {
                $('#ibox').children('.ibox-content').toggleClass('sk-loading');
            },
            success: function(data) {
                console.log(data);
                if(!data){
                    $('#ibox').children('.ibox-content').toggleClass('sk-loading');
                    console.log(data);
                    let alert = ' <div class="alert alert-danger hidden">\n' +
                        'Invalide login or Password <a class="alert-link" href="#">Verify and try again</a>.\n' +
                        '</div>';
                    $('#alert').append(alert);
                }else{
                    console.log(data);
                    window.location.replace('../dashboard');
                }
            }
        });



    }
}




// $('#alert_login_danger').css('display', 'none');
// $('#alert_login_warning').css('display', 'none');
// $('#alert_login_success').css('display', 'block');
// $('#alert_login_danger').css('display', 'none');
// $('#alert_login_acceso').css('display', 'block');
// $('#alert_login_danger').css('display', 'block');
// $('#alert_login_warning').css('display', 'block');