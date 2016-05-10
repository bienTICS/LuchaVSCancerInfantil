<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UMAE</title>
        <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="<?=  base_url()?>assets/libs/assets/animate.css/animate.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/libs/assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/libs/jquery/waves/dist/waves.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/styles/material-design-icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/libs/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets/libs/bootstrap-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/libs/jquery/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/libs/bootstrap-fileinput/css/fileinput.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/libs/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets/libs/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets/libs/jquery-notifications/css/location-sel.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets/libs/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/libs/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets/libs/boostrap-clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets/libs/html5imageupload/demo.html5imageupload.css" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
        <link href="<?=  base_url()?>assets/styles/font.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/styles/app.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/styles/style.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets/img/imss.png" rel="icon" type="image/png">

    </head>
    <body>
        <div class="app">
            <aside id="aside" class="app-aside modal  " role="menu">
                <div class="left ">
                    <div class="box back-imss">
                        <div class="navbar md-whiteframe-z1 waves-effect no-radius blue text-center  back-imss-all "  style="padding:9px;width: 100%">
                            <span class="h2 " style="font-weight: bold;font-size: 22px;">Todos Contra el Cáncer</span>
                            <!-- / brand -->
                        </div>
                        <div class="box-row">
                            <div class="box-cell scrollable ">
                                <div class="box-inner ">
                                    <div class="p hidden-folded blue-50 text-center back-imss" >
                                        <div class="rounded bg-white inline pos-rlt" style="width: 120px;height: 120px">
                                            <center>
                                            <img src="<?=  base_url()?>assets/img/logo.png" class="img-responsive rounded" style="background-size: cover;width: 70px;margin-top: 20px">
                                            </center>
                                        </div>
                                        <a class="block m-t-sm" target="#nav, #account">
                                            <span class="block font-bold" style="font-size: 15px;font-weight: 100">
                                                <?=$info[0]['usuario_nombre']?> <?=$info[0]['usuario_apellidos']?>
                                            </span>

                                        </a>
                                    </div>
                                    <div id="nav">
                                        <nav ui-nav>
                                            <ul class="nav">
                                                <li>
                                                    <a md-ink-ripple href="<?=  base_url()?>inicio">
                                                        <i class="icon fa fa-home i-20"></i>
                                                        <span class="font-normal color-white" style="margin-left: -15px;">Inicio</span>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <nav>
                            <ul class="nav b-t b back-imss-all">
                                <li>
                                    <a href="#"  md-ink-ripple>
                                        <input type="hidden" name="csrf_token">
                                        <span> Sitio desarrollado por bienTICS </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>
            <div id="content" class="app-content" role="main">
                <div class="box">
                    <div class="navbar md-whiteframe-z1 no-radius bg-white color-black" >
                        <a md-ink-ripple  data-toggle="modal" data-target="#aside" class="navbar-item pull-left visible-xs visible-sm"><i class="mdi-navigation-menu i-24"></i></a>
                        <ul class="nav nav-sm navbar-tool pull-left">
                            <li>
                                <a class="time" >
                                    <b class="hora" ></b>    <b class="pointer-time"> : </b> 
                                    <b class="minuto"></b>  <b class="pointer-time"> : </b>
                                    <b class="segundo"></b> 
                                </a>
                            </li>
                            <li class=""> 
                                <a >
                                <b class="fecha" ></b> 
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-sm navbar-tool pull-right">
                            <li>
                                <a md-ink-ripple >
                                    <center>
                                    <img src="<?=  base_url()?>assets/img/perfiles/default.png" style="width: 70%">
                                    </center>
                                </a>
                            </li>
                            <li class="hide">
                                <a style="font-size: 15px;font-weight: normal"><?=$info[0]['usuario_nombre']?> <?=$info[0]['usuario_apellidos']?></a>
                            </li>
                            <li class="dropdown">
                                <a md-ink-ripple data-toggle="dropdown">
                                    <i class="mdi-navigation-more-vert i-24"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-scale pull-right pull-up text-color">
                                    <li><a href="">Mi Perfil</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?=  base_url()?>config/CerrarSesion">Cerrar sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    