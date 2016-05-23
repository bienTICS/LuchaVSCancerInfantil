<?php include "./demo/config.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">	
        <title>Lucha VS El Cáncer Infantil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="img/logo.png">        
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon- 114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon- 72x72-precomposed.png">
        <link rel="stylesheet" href="demo/css/style.css" type="text/css">		
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet'> 
        <script src="demo/js/respond.src.js"></script>
    </head>
    <body id="" class="user-select-none" style="overflow: visible!important">
        <!-- Header -->
        <header style="display: none">
            <div class="left">
                <div class="logo"><a href="#"><img src="demo/img/logo.png" alt=""></a></div>
            </div>
            <div class="right">
                <div class="devices">	
                    <div class="tablet" style="display: none">
                        <a href="#"><i class="fa fa-tablet"></i></a>
                        <ul>
                            <li data-width="768" data-height="1024" data-image="demo/img/dev/mini.png" data-left="43" data-top="120">
                                    Apple iPad Mini
                                    <span>768 x 1024</span>
                            </li>
                            <li data-width="768" data-height="1024" data-image="demo/img/dev/air.png" data-left="53" data-top="109">
                                    iPad Air
                                    <span>768 x 1024</span>
                            </li>
                            <li data-width="768" data-height="1024" data-image="demo/img/dev/ipad2.png" data-left="93" data-top="111">
                                    iPad 2
                                    <span>768 x 1024</span>
                            </li>
                            <li data-width="604" data-height="966" data-image="demo/img/dev/Nexus7.png" data-left="62" data-top="151">
                                    Google Nexus 7
                                    <span>604 x 966</span>
                            </li>
                            <li data-width="1280" data-height="800" data-image="demo/img/dev/kindlefire.png" data-left="130" data-top="125">
                                    Amazon Kindle Fire HDX 8.9 
                                    <span>1280 x 800</span>
                            </li>
                            <li data-width="533" data-height="853" data-image="demo/img/dev/KindleFire2.png" data-left="84" data-top="85">
                                    Amazon Kindle Fire
                                    <span>600 x 1024</span>
                            </li>

                            <li data-width="1024" data-height="600" data-image="demo/img/dev/BlackberryPlayBook.png" data-left="125" data-top="129">
                                    Blackberry Playbook
                                    <span>1024 x 600</span>
                            </li>
                            <li data-width="800" data-height="1280" data-image="demo/img/dev/ASUS-TF101.png" data-left="114" data-top="163">
                                    ASUS TF101 / TF201
                                    <span>1280 x 800</span>
                            </li>					
                            <li data-width="768" data-height="1024" data-image="demo/img/dev/HP-TouchPad.png" data-left="107" data-top="115">
                                    HP TouchPad
                                    <span>768 × 1024</span>
                            </li>									
                            <li data-width="768" data-height="1024" data-image="demo/img/dev/GalaxyTab.png" data-left="118" data-top="145">
                                    Samsung Galaxy Tab
                                    <span>600 x 1024</span>
                            </li>
                        </ul>
                    </div>	
                    <div class="phone" >
                        <a href="#"><i class="fa fa-mobile"></i></a>
                        <ul >
                            <li data-width="320" data-height="480" data-image="img/dev/4s.png" data-left="27" data-top="133">
                                    Apple iPhone 4s
                                    <span>320 x 480</span>
                            </li>  
                            <li data-width="320" data-height="568" data-image="img/dev/5s.png" data-left="25" data-top="107">
                                    Apple iPhone 5s
                                    <span>320 x 568</span>
                            </li>				
                            <li data-width="540" data-height="960" data-image="img/dev/nexus5.png" data-left="34" data-top="104">
                                    Google Nexus 5
                                    <span>540 x 960</span>
                            </li>
                            <li data-width="540" data-height="960" data-image="img/dev/one.png" data-left="38" data-top="126">
                                    HTC One<!-- /One X/ One X+ -->
                                    <span>540 x 960</span>
                            </li>
                            <li data-width="360" data-height="640" data-image="img/dev/onemini.png" data-left="29" data-top="103">
                                    HTC One Mini
                                    <span>480 x 640</span>
                            </li>
                            <li data-width="540" data-height="960" data-image="img/dev/g2.png" data-left="20" data-top="75">
                                    LG G2
                                    <span>540 x 960</span>
                            </li>
                            <li data-width="400" data-height="800" data-image="img/dev/lumia520.png" data-left="48" data-top="103">
                                    Nokia Lumia 520
                                    <span>320 x 534</span>
                            </li>
                            <li data-width="540" data-height="960" data-image="img/dev/s4.png" data-left="25" data-top="107">
                                    Samsung Galaxy S4
                                    <span>540 x 960</span>
                            </li>					
                            <li data-width="540" data-height="960" data-image="img/dev/not3.png" data-left="30" data-top="97">
                                    Samsung Galaxy Note 3
                                    <span>540 x 960</span>
                            </li>					
                            <li data-width="360" data-height="640" data-image="img/dev/motox.png" data-left="18" data-top="81">
                                    Motorola Moto X
                                    <span>360 x 640</span>
                            </li>					
                            <li data-width="360" data-height="640" data-image="img/dev/DroidRazr.png" data-left="30" data-top="77">
                                    Motorola Droid Razr Maxx HD
                                    <span>360 x 640</span>
                            </li>

                        </ul>
                    </div>
                    <div class="rotate"><i class="fa fa-refresh"></i></div>
                    <div class="screen curr"><i class="fa fa-expand"></i></div>
                </div>
            </div>	
            <div id="preview-img"><div></div></div>
        </header>
        <div class="clear"></div>
        <div class="dev">
            <center>
            <img src="demo/img/dev/not3.png" style="width: 300px;margin-top: 12px;;z-index: 100000000">
            </center>
            <div class="bar-clear"></div>
        </div>
	<section class="section">	
            <iframe id="frame" src="www/"></iframe>
        </section>
        <script src="demo/js/jquery.min.js"></script>
        <script src="demo/js/jquery.easing.1.3.js"></script>
        <script src="demo/js/main.js"></script>
    </body>
</html>
