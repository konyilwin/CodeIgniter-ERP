class Auth extends Help {
    login() {
            $.ajax({
                url: 'validateLogin',
                type: 'POST',
                dataType: 'json',
                data: $('#fromLogin').serialize(),
                beforeSend: () => {
                    $('#ibox').children('.ibox-content').toggleClass('sk-loading');
                },
                success: (data) => {
                    if (!data) {
                        super.userNotify(c.USER_LOGIN_INCORRECT, 'warning');
                    } else if(data.active > 0) {
                        super.userNotify(c.USER_LOGIN_SUCCESS, 'success');
                        window.location.replace('../dashboard');
                    }else{
                        super.userNotify(c.USER_DESACTIVE, 'danger')
                    }
                    $('#ibox').children('.ibox-content').toggleClass('sk-loading');
                }
            });
        }
    }
class Dashboard extends Help {
}