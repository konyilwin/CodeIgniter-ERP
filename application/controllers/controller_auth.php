<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_auth');
//      $this->load->library('email');
    }

    public function loadHead(){
        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";
        $this->load->view('layout/header',$data);
    }

    public function index()
    {
        $this->load->view('auth/login');
        $query2 = $this->model_auth->validar('jasp402@gmail.com','123123');
        echo json_encode($query2);
    }

/*    public function ver_password(){
        echo $this->encrypt->encode('123456');
        echo "<br/>";
        echo $this->encrypt->sha1('123456');
    }

    public function validar(){
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');

        $query2 = $this->Home_model->validar($usuario,$password);
        switch ($query2) {
            case true:
                $query = $this->Home_model->validarCondicion($usuario);
                if ($query == 1) {
                    foreach ($query2 as $row) {
                        $id_Usu_Usuario = $row->id_usuario;
                        $nombre_usuario = $row->nombre;
                    }
                    $this->session->set_userdata('codigo_usuario',$this->encrypt->encode($id_Usu_Usuario));
                    $this->session->set_userdata('nombre_usuario',$nombre_usuario);

                    $data = array('success' => true);
                    echo json_encode($data);
                }else{
                    $data = array('success' => "RESTRINGIDO");
                    echo json_encode($data);
                }
                break;

            default:
                $data = array('success' => false);
                echo json_encode($data);
                break;
        }
    }

    public function salir(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function insertar(){

        $correo = 'MARIO@gmail.com';
        $query = $this->Home_model->insertar($correo);
        if ($query == '1451') {
            echo "ESTE CAMPO ESTA ASOCIADO CON OTRA TABLA";
        }else{
            echo "error";
        }
    }

    public function recuperar(){
        $correo = $this->input->post('correo');
        // $correo = "sacas@gmail.com";
        $query  = $this->Home_model->get_clave($correo);

        if ($query) {
            foreach ($query as $key) {
                $nombre = $key->nombre;
                $correo = $key->correo;
                $clave  = $key->clave;
            }
            $this->recuperar_mail($nombre,$correo,$clave);
            $data = array('success' => true);
        }else{
            $data = array('success' => false);
        }

        echo json_encode($data);
        // echo "string";
    }

    public function update_clave(){
        $correo = $this->encrypt->decode(url_deco($this->input->post('char2')));
        $clave = $this->input->post('pass');

        $query = $this->Home_model->up_clave($correo,$clave);
        if ($query) {
            $data = array('success' => true);
        }else{
            $data = array('success' => false);
        }

        echo json_encode($data);
    }

    public function change_password(){
        // $hora = $this->encrypt->decode(url_deco($this->uri->segment(4)));
        // $correo = $this->encrypt->decode(url_deco($this->uri->segment(5)));

        $hora_actual = date('d-m-Y');
        if ($this->uri->segment(4)== "" || $this->uri->segment(5)== "") {
            $this->load->view('global_views/404');
        }else{
            if (($this->encrypt->decode(url_deco($this->uri->segment(4)))) <> $hora_actual) {
                echo "	<!DOCTYPE html>
				<html lang='es'>
				<head>
				    <meta http-equiv='content-type' content='text/html; charset=UTF-8'> 
				    <meta charset='utf-8'>
				    <title>Cambiar clave</title>
				    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
				    <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css' rel='stylesheet'>
				</head>
				<body>
				    <div class='modal'>
				        <div class='modal-header'>
				            <h3>Este enlace ha expirado, por favor vuelva solicitar un nuevo cambio de clave.</h3>
				        </div>
				    </div>
				</body>
				</html>";
            }else{
                $this->load->view('global_views/cambiar_password');
            }
        }
    }

    public function recuperar_mail($nombre,$correo,$clave){
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://single-priva4.privatednsorg.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "noreply@gunuweb.net";
        $config['smtp_pass'] = '1JAO3+.csz-8';
        $config['mailtype'] = 'html';
        $config['newline'] = "\r\n";
        $config['crlf'] = "\r\n";

        date_default_timezone_set('America/Lima');
        $hora = date('d-m-Y');
        $URL_HORA = url_enco($this->encrypt->encode($hora));
        $URL_MAIL = url_enco($this->encrypt->encode($correo));
        $RUTA_URL_URI = base_url()."login/home/change_password/".$URL_HORA."/".$URL_MAIL;
        $this->email->initialize($config);
        $this->email->from('noreply@appsystem.net','System');
        $this->email->to($correo);
        // $this->email->bcc($correocc); COPIA OCULTA
        $this->email->subject('Recuperar Clave');
        $message = "<!doctype html>
		 <html xmlns='http://www.w3.org/1999/xhtml'>
		 <head>
		  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		  <meta name='viewport' content='initial-scale=1.0' />
		  <meta name='format-detection' content='telephone=no' />
		  <title></title>
		  <style type='text/css'>
		 	body {
				width: 100%;
				margin: 0;
				padding: 0;
				-webkit-font-smoothing: antialiased;
			}
			@media only screen and (max-width: 600px) {
				table[class='table-row'] {
					float: none !important;
					width: 98% !important;
					padding-left: 20px !important;
					padding-right: 20px !important;
				}
				table[class='table-row-fixed'] {
					float: none !important;
					width: 98% !important;
				}
				table[class='table-col'], table[class='table-col-border'] {
					float: none !important;
					width: 100% !important;
					padding-left: 0 !important;
					padding-right: 0 !important;
					table-layout: fixed;
				}
				td[class='table-col-td'] {
					width: 100% !important;
				}
				table[class='table-col-border'] + table[class='table-col-border'] {
					padding-top: 12px;
					margin-top: 12px;
					border-top: 1px solid #E8E8E8;
				}
				table[class='table-col'] + table[class='table-col'] {
					margin-top: 15px;
				}
				td[class='table-row-td'] {
					padding-left: 0 !important;
					padding-right: 0 !important;
				}
				table[class='navbar-row'] , td[class='navbar-row-td'] {
					width: 100% !important;
				}
				img {
					max-width: 100% !important;
					display: inline !important;
				}
				img[class='pull-right'] {
					float: right;
					margin-left: 11px;
		            max-width: 125px !important;
					padding-bottom: 0 !important;
				}
				img[class='pull-left'] {
					float: left;
					margin-right: 11px;
					max-width: 125px !important;
					padding-bottom: 0 !important;
				}
				table[class='table-space'], table[class='header-row'] {
					float: none !important;
					width: 98% !important;
				}
				td[class='header-row-td'] {
					width: 100% !important;
				}
			}
			@media only screen and (max-width: 480px) {
				table[class='table-row'] {
					padding-left: 16px !important;
					padding-right: 16px !important;
				}
			}
			@media only screen and (max-width: 320px) {
				table[class='table-row'] {
					padding-left: 12px !important;
					padding-right: 12px !important;
				}
			}
			@media only screen and (max-width: 600px) {
				td[class='table-td-wrap'] {
					width: 100% !important;
				}
			}
		  </style>
		 </head>
		 <body style='font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;' bgcolor='#113D68' leftmargin='0' topmargin='0' marginheight='0' marginwidth='0'>
		 <table width='100%' height='100%' bgcolor='#113D68' cellspacing='0' cellpadding='0' border='0'>
		 <tr><td width='100%' align='center' valign='top' bgcolor='#113D68' style='background-color:#113D68; min-height: 200px;'>
		<table><tr><td class='table-td-wrap' align='center' width='600'><table class='table-row' width='580' bgcolor='#FFFFFF' style='table-layout: fixed; background-color: #ffffff;' cellspacing='0' cellpadding='0' border='0'><tbody><tr><td class='table-row-td' style='font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;' valign='top' align='left'>
		   <table class='table-col' align='left' width='508' cellspacing='0' cellpadding='0' border='0' style='table-layout: fixed;'><tbody><tr><td class='table-col-td' width='508' style='font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;' valign='top' align='left'>
			 <table class='header-row' width='508' cellspacing='0' cellpadding='0' border='0' style='table-layout: fixed;'><tbody><tr><td class='header-row-td' width='508' style='font-size: 28px; margin: 0px; font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; padding-bottom: 10px; padding-top: 15px;' valign='top' align='left'>Hola ".$nombre."</td></tr></tbody></table>
		     <div style='font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px;'>Al parecer has solicitado la recuperaci&oacute;n de tu clave</div>
		     <div style='font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px;'>Para poder cambiarla ingresa a esta direcci&oacute;n</div>
		     <div style='font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px;'><a href='".$RUTA_URL_URI."' style='color: #337ab7; text-decoration: none; background-color: transparent;'>".$RUTA_URL_URI."</a></div>
		   </td></tr></tbody></table>
		</td></tr></tbody></table>
		<table class='table-space' height='12' style='height: 12px; font-size: 0px; line-height: 0; width: 580px; background-color: #ffffff;' width='580' bgcolor='#FFFFFF' cellspacing='0' cellpadding='0' border='0'><tbody><tr><td class='table-space-td' valign='middle' height='12' style='height: 12px; width: 580px; background-color: #ffffff;' width='580' bgcolor='#FFFFFF' align='left'>&nbsp;</td></tr></tbody></table></td></tr></table>
		</td></tr>
		 </table>
		 </body>
		 </html>";

        $this->email->message($message);
        if ($this->email->send()) {
            return TRUE;
        }else{
            return FALSE;
        }
    }*/
}
