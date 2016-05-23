<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Lucha VS El Cáncer Infantil</title>
        <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/libs/assets/animate.css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/libs/assets/font-awesome/css/font-awesome.css" type="text/css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/libs/jquery/waves/dist/waves.css" type="text/css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/styles/material-design-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/styles/font.css" type="text/css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/styles/app.css" type="text/css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/styles/style.css" type="text/css" />
    </head>
    <body>
        <div class="app">
            <div class="center-block w-xxl w-auto-xs p-v-md">
                <div class="navbar hidden">
                    <div class="navbar-brand m-t-lg text-center">
                        <i class="fa fa-heartbeat fa-3x" aria-hidden="true"></i>
                        <span class="m-l inline">Todos contra el cancer</span>
                    </div>
                </div>
                <div class="p-lg panel md-whiteframe-z1 text-color m margin-top100">
                    <div class="row row-no-login hide">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <div class="controls text-center">
                                    <br><br>
                                    <h4>Usuario y/o Contraseña incorrectos</h4><br>
                                    <button type="button" style="width:80%;" class="btn btn-info btn-no-login btn-cons back-imss" id="btnAccesar">Accesar</button>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <form name="form" class="login-form row-login">
                        <div class="m-b text-md text-center">Iniciar sesión</div>
                        <div class="md-form-group float-label">
                            <input type="user" class="md-input" name="usuario_user" required>
                            <label>Usuario</label>
                        </div>
                        <div class="md-form-group float-label">
                            <input type="password" class="md-input" name="usuario_pass" required>
                            <label>Contraseña</label>
                        </div>      
                        <div class="m-b-md">        
                            <label class="md-check">
                                <input type="checkbox"><i class="indigo"></i> Recordarme
                            </label>
                        </div>
                        <button md-ink-ripple type="submit" class="md-btn md-raised back-tcc btn-block p-h-md no-text-transform">Acceder</button>
                    </form>
                </div>
                <div class="p-v-lg text-center ">
                    <div class="m-b">
                        <a href="<?=  base_url()?>app/www">
                            <button md-ink-ripple="" class="md-btn md-raised m-b btn-fw blue waves-effect">Ver app</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script>var base_url='<?=  base_url()?>';</script>
        <script src="<?=  base_url()?>assets/libs/jquery/jquery/dist/jquery.js"></script>
        <script src="<?=  base_url()?>assets/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
        <script src="<?=  base_url()?>assets/libs/jquery/waves/dist/waves.js"></script>
        <script src="<?=  base_url()?>assets/scripts/ui-load.js"></script>
        <script src="<?=  base_url()?>assets/scripts/ui-jp.config.js"></script>
        <script src="<?=  base_url()?>assets/scripts/ui-jp.js"></script>
        <script src="<?=  base_url()?>assets/scripts/ui-nav.js"></script>
        <script src="<?=  base_url()?>assets/scripts/ui-toggle.js"></script>
        <script src="<?=  base_url()?>assets/scripts/ui-form.js"></script>
        <script src="<?=  base_url()?>assets/scripts/ui-waves.js"></script>
        <script src="<?=  base_url()?>assets/scripts/ui-client.js"></script>
        <script src="<?=  base_url()?>assets/js/login.js"></script>
    </body>
</html>
