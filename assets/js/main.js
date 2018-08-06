class Auth {
    login() {
        $('#ibox').children('.ibox-content').toggleClass('sk-loading');
        fetch('validateLogin', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: $('#fromLogin').serialize()
        }).then((res) => {
            return res.json();
        }).then((data) => {
         console.log(data);
            if(data === false){
                $('#ibox').children('.ibox-content').toggleClass('sk-loading');

                let alert = ' <div class="alert alert-danger hidden">\n' +
                    'Invalide login or Password <a class="alert-link" href="#">Verify and try again</a>.\n' +
                    '</div>';
                $('#alert').append(alert);
            }else{
                window.location.replace('dashboard/home');
            }

        })

    }

}




// $('#alert_login_danger').css('display', 'none');
// $('#alert_login_warning').css('display', 'none');
// $('#alert_login_success').css('display', 'block');
// $('#alert_login_danger').css('display', 'none');
// $('#alert_login_acceso').css('display', 'block');
// $('#alert_login_danger').css('display', 'block');
// $('#alert_login_warning').css('display', 'block');