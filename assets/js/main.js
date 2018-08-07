class Auth extends Help {
    login() {
        let objNotify = {
            msg : "Invalide login or Password <a class=\"alert-link\" href='"+window.location.href+"'>Verify and try again</a>.",
            type: 'danger'
            };
            $.ajax({
                url: 'validateLogin',
                type: 'POST',
                dataType: 'json',
                data: $('#fromLogin').serialize(),
                beforeSend: (xhr, textStatus) => {
                    $('#ibox').children('.ibox-content').toggleClass('sk-loading');
                },
                success: (data) => {
                    if (!data) {
                        console.log(data);
                        $('#ibox').children('.ibox-content').toggleClass('sk-loading');
                        super.userNotify(objNotify.msg, objNotify.type)
                    } else {
                        console.log(data);
                        window.location.replace('../dashboard');
                    }
                }
            });
        }
    }
class Dashboard extends Help {
}