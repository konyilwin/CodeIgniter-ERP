<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script>
    var auth = new Auth();
</script>
<body class="gray-bg">
<div class="loginColumns animated fadeInDown">
    <div class="row">
        <div class="col-md-6">

            <div class="wrapper wrapper-content project-manager" style="margin-top: -80px">
                <img src="<?php echo base_url()."assets/";?>img/zender_logo.png" class="img-fluid">
                <p class="small" style="text-align: justify;">
                    Perfectamente diseñado para la gestion de almacenamiento, reordenamiento y distribucion de materia prima o materiales de diversos tipos.
                    Adaptado a la logica de negocio para industrias manufactureras, que requieren organizar lineas de produccion y realizar seguimiento por areas.
                    Cuenta con un sistema de etiquetado por codigo de barra que optimiza el desempleño de sus procesos.
                </p>
                <h5>Modulos tag</h5>
                <ul class="tag-list" style="padding: 0">
                    <li><a href=""><i class="fa fa-tag"></i> Almacen</a></li>
                    <li><a href=""><i class="fa fa-tag"></i> Destribucion</a></li>
                    <li><a href=""><i class="fa fa-tag"></i> Embalaje</a></li>
                    <li><a href=""><i class="fa fa-tag"></i> Inventarios</a></li>
                    <li><a href=""><i class="fa fa-tag"></i> Produccion</a></li>
                    <li><a href=""><i class="fa fa-tag"></i> reportes</a></li>
                </ul>
                <br>
            </div>
            <div class="wrapper wrapper-content project-manager">
                <h5>Update & Version</h5>
                <small><i class="fa fa-code"></i> Details about <a href="#">Development</a> and evolution of project</small>
                <br>
                <small><i class="fa fa-git"></i> version 3.0.1  | Latest commit 4444840 </small>
                <br>
                <small><i class="fa fa-clock-o"></i> Uploaded on October 27, 2018</small>
                <br>
            </div>
        </div>
        <div class="col-md-6">
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
                            <input type="email" class="form-control" id="username" placeholder="Username" name="usuario"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password"/>
                        </div>
                        <button type="button" class="btn btn-primary block full-width m-b"  onclick="auth.login();">
                            Login
                        </button>
                        <div id="alert"></div>
                        <a href="<?=base_url('auth/forgotPassword') ?>">
                            <small">Forgot password?</small>
                        </a>
                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="<?=base_url('shopping/packages') ?>">Create an account</a>
                    </form>

                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Copyright Example Company
        </div>
        <div class="col-md-6 text-right">
            <small>© 2014-2015</small>
        </div>
    </div>
</div>
</body>

