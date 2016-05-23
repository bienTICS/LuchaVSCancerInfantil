<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>TODOS vs Cáncer infantil.</title>
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
                        <div class="navbar md-whiteframe-z1 waves-effect no-radius back-tcc text-center  back-imss-all "  style="padding:21px;width: 100%">
                            <span class="h2 " style="font-weight: bold;font-size: 17px;">TODOS vs Cáncer infantil</span>
                            <!-- / brand -->
                        </div>
                        <div class="box-row">
                            <div class="box-cell scrollable ">
                                <div class="box-inner ">
                                    <div class="p hidden-folded blue-50 text-center back-imss" >
                                        <div class="rounded bg-white inline pos-rlt" style="width: 120px;height: 120px">
                                            <center>
                                            <img src="<?=  base_url()?>assets/img/perfiles/<?=$info[0]['usuario_perfil']?>" class="img-responsive rounded" style="background-size: cover;width: 100%;margin-top: 0px">
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
                                                <li>
                                                    <a md-ink-ripple href="<?=  base_url()?>inicio/diccionarios">
                                                        <i class="icon fa fa-book i-20"></i>
                                                        <span class="font-normal color-white" style="margin-left: -15px;">Diccionarios</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a md-ink-ripple href="<?=  base_url()?>inicio/directorio_uma">
                                                        <i class="icon fa fa-medkit i-20"></i>
                                                        <span class="font-normal color-white" style="margin-left: -15px;">Directorio UMA</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a md-ink-ripple href="<?=  base_url()?>inicio/directorio_osc">
                                                        <i class="icon fa fa-medkit i-20"></i>
                                                        <span class="font-normal color-white" style="margin-left: -15px;">Directorio OSC</span>
                                                    </a>
                                                </li>
                                                <li >
                                                    <a md-ink-ripple="" href="" class=" waves-effect">
                                                        <span class="pull-right text-muted">
                                                            <i class="fa fa-caret-down"></i>
                                                        </span>
                                                        <i class="icon fa fa-users i-20"></i>
                                                        <span style="margin-left: -15px;">Padres de familia</span>
                                                    </a>
                                                    <ul class="nav nav-sub" style="display: block;">
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Videos</a>
                                                        </li>   
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Redes</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Test</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Blog</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li >
                                                    <a md-ink-ripple="" href="" class=" waves-effect">
                                                        <span class="pull-right text-muted">
                                                            <i class="fa fa-caret-down"></i>
                                                        </span>
                                                        <i class="icon fa fa-male i-20"></i>
                                                        <span style="margin-left: -15px;">Adolecentes</span>
                                                    </a>
                                                    <ul class="nav nav-sub" style="display: block;">
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Videos</a>
                                                        </li>   
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Redes</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Test</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Blog</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li >
                                                    <a md-ink-ripple="" href="" class=" waves-effect">
                                                        <span class="pull-right text-muted">
                                                            <i class="fa fa-caret-down"></i>
                                                        </span>
                                                        <i class="icon fa fa-building i-20"></i>
                                                        <span style="margin-left: -15px;">Escuela/Maestro</span>
                                                    </a>
                                                    <ul class="nav nav-sub" style="display: block;">
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Videos</a>
                                                        </li>   
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Redes</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Test</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Blog</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li >
                                                    <a md-ink-ripple="" href="" class=" waves-effect">
                                                        <span class="pull-right text-muted">
                                                            <i class="fa fa-caret-down"></i>
                                                        </span>
                                                        <i class="icon fa fa-wheelchair i-20"></i>
                                                        <span style="margin-left: -15px;">Paciente</span>
                                                    </a>
                                                    <ul class="nav nav-sub" style="display: block;">
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Orientación</a>
                                                        </li>   
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Cuando me acaban de dar la noticia</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Tipos de tratamiento</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Recomendaciones</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Ligas de apoyo</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li >
                                                    <a md-ink-ripple="" href="" class=" waves-effect">
                                                        <span class="pull-right text-muted">
                                                            <i class="fa fa-caret-down"></i>
                                                        </span>
                                                        <i class="icon fa fa-user-md i-20"></i>
                                                        <span style="margin-left: -15px;">Médico.</span>
                                                    </a>
                                                    <ul class="nav nav-sub" style="display: block;">
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Videos</a>
                                                        </li>   
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Redes</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Test</a>
                                                        </li>
                                                        <li>
                                                            <a md-ink-ripple="" href="" class=" waves-effect">Blog</a>
                                                        </li>
                                                    </ul>
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
                                    <img src="<?=  base_url()?>assets/img/perfiles/<?=$info[0]['usuario_perfil']?>" style="width: 40px">
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
                    