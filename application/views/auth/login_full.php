<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
    let auth = new Auth();
    $(document).ready(()=> {
        const login  = () => ($('#username').val()  !== '' && $('#password').val() !== '') ? auth.login() : $('.form-group').addClass('has-error');
        $('body').keyup((e) => {
            if (e.keyCode === 13) {
                console.log();
                login();
            }
        });
        $('#btnSubmit').on('click',(e)=>{
            e.preventDefault();
            login();
        });
    });
</script>
<body id="page-top" class="landing-page no-skin-config">
<div class="row">
    <div id="inSlider" class="col-md-9 gray-bg full-height " style="padding-right:0">
        <div class="full-height-scroll">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-image wow zoomIn">
                            <img src="<?php echo base_url()."assets/"; ?>img/landing/laptop.png" alt="laptop"/>
                        </div>
                        <div class="carousel-caption text-right">
                            <h1>UN SOFTWARE <br>
                                HECHO A LA MEDIDA  <br>
                                DE TUS NECESIDADES <br>
                                JASP402 | [ERP-SYSTEM] </h1>
                            <p class="white-bg">MAS QUE UNA APLICACIÓN SOMOS CALIDAD EN SERVICIO</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="../shopping/blog" role="button">LEER MÁS</a>
                            </p>
                        </div>
                    </div>
                    <div class="header-back one"></div>
                </div>
                <section id="contact" class="gray-section contact">
                    <div class="container">
                        <div class="row m-b-lg">
                            <div class="col-lg-12 text-center">
                                <div class="navy-line"></div>
                                <h1>Contactanos</h1>
                                <p>Sin limites ni fronteras, estamos a solo un clic de distancia.</p>
                            </div>
                        </div>
                        <div class="row m-b-lg justify-content-center">
                            <div class="col-lg-2">

                            </div>
                            <div class="col-lg-3">
                                <address>
                                    <strong><span class="navy">Perú, Lima.</span></strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                            <div class="col-lg-3">
                                <address>
                                    <strong><span class="navy">Ecuador, Quito.</span></strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                            <div class="col-lg-3">
                                <address>
                                    <strong><span class="navy">Chile, Santiago.</span></strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <a href="mailto:test@email.com" class="btn btn-primary">Envia un e-mail</a>
                                <p class="m-t-sm">
                                    Síguenos en nuestras redes social
                                </p>
                                <ul class="list-inline social-icon">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center m-t-lg m-b-lg">
                                <p><strong>JASP402 | ERP-SYSTEM </strong><br> Powered By CodeIgniter, Copyright © 2018 JASP402. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
    <div class="col-md-3 full-height white-bg">
        <div id="ibox">
            <div class="ibox-content">
                <h2>JASP402 | [ERP-SYSTEM]</h2>
                <div class="tooltip-demo">
                    <small>Use sus <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="El administrador del sistema es el responsable de asignar las credenciales de los usuarios de la organización">credenciales</a> para iniciar sesión</small>
                </div>
                <div class="sk-spinner sk-spinner-wave">
                    <div class="sk-rect1"></div>
                    <div class="sk-rect2"></div>
                    <div class="sk-rect3"></div>
                    <div class="sk-rect4"></div>
                    <div class="sk-rect5"></div>
                </div>
                <form action="" id="fromLogin">


                    <div class="form-group">
                        <input type="email" class="form-control" id="username" placeholder="correo o Nombre de usuario" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
                    </div>
                    <button type="button" class="btn btn-primary block full-width m-b" id="btnSubmit">
                        Ingresar <i class="fa fa-sign-in"></i>
                    </button>
                    <div class="col-md-12" id="alert"></div>
                    <a class="btn btn-outline btn-info btn-block" href="../shopping/blog#pricing">Suscribete <i class="fa fa-share-square-o"></i></a>
                    <br>
                    <small><a href="http://jasp402.com/_systems/auth/forgotPassword"> ¿Se te olvidó tu contraseña?</a></small>


                </form>
                <hr>
                <h5>Update &amp; Version</h5>
                <small><i class="fa fa-code"></i> Details about <a href="#">Development</a> and evolution of project</small>
                <br>
                <small><i class="fa fa-git"></i> version 3.0.1  | Latest commit 4444840 </small>
                <br>
                <small><i class="fa fa-clock-o"></i> Uploaded on October 27, 2018</small>
            </div>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo base_url()."assets/"; ?>js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/popper.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url()."assets/"; ?>js/inspinia.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/plugins/pace/pace.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/plugins/wow/wow.min.js"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '#navbar',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
            header = document.querySelector( '.navbar-default' ),
            didScroll = false,
            changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>

