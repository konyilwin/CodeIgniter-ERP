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
    <div id="inSlider" class="col-md-9" style="padding-right:0">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-image wow zoomIn">
                        <img src="<?php echo base_url()."assets/"; ?>img/landing/laptop.png" alt="laptop"/>
                    </div>
                    <div class="carousel-caption text-right">
                        <h1>We craft<br/>
                            brands, web apps,<br/>
                            and user interfaces<br/>
                            we are IN+ studio</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>
                        </p>
                    </div>
                </div>
                <div class="header-back one"></div>
            </div>
            <div class="navy-line"></div>
            <div class="col-lg-12 text-center m-t-lg m-b-lg">
                <p><strong>© 2015 Company Name</strong><br> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 full-height white-bg">
        <div id="ibox">
            <div class="ibox-content">
                <div class="sk-spinner sk-spinner-wave">
                    <div class="sk-rect1"></div>
                    <div class="sk-rect2"></div>
                    <div class="sk-rect3"></div>
                    <div class="sk-rect4"></div>
                    <div class="sk-rect5"></div>
                </div>
                <form action="" id="fromLogin">


                    <div class="form-group">
                        <input type="email" class="form-control" id="username" placeholder="Email or username" name="username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password"/>
                    </div>
                    <button type="button" class="btn btn-primary block full-width m-b" id="btnSubmit">
                        Login <i class="fa fa-sign-in"></i>
                    </button>
                    <div class="col-md-12" id="alert"></div>
                    <a class="btn btn-outline btn-info btn-block" href="<?=base_url('shopping/blog') ?>">Create an account <i class="fa fa-share-square-o"></i></a>
                    <a class="btn btn-sm btn-white btn-block" href="<?=base_url('auth/forgotPassword') ?>"> <i class="fa fa-sign-in fa-flip-horizontal"></i> Forgot password?</a>

                </form>
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

