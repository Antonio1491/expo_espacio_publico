<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
     
<link rel="stylesheet" href="css/mapa.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
          <?php
        include 'config/conexion.php';
        $sql="SELECT * FROM expositores"
        ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TDCY5P9R4Q"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TDCY5P9R4Q');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"                content="https://www.expoespaciopublico.com/" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Expo Espacio Público" />
    <meta name="og:site_propiedad"         content="Expo Espacio Público">
    <meta property="og:description"        content="Expo Espacio Público es una exposición especializada que se realiza dentro del Congreso Parques, y que reúne a los principales proveedores de productos y servicios." />
    <title>Stands de Expositores - Expo Espacio Público</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area">
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">
                                <img src="images/logo-white.png" alt="image">
                                <img src="images/logo.png" alt="image">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="dropdown submenu active">
                                    <a href="index.html" class="">Inicio</a>
                                </li>
                                
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Visitante <i class="fas fa-caret-down ms-1" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="visitantes.html">INFORMACIÓN</a></li>
                                        <!-- <li><a href="programa.html">PROGRAMA</a></li> -->
                                        <!-- <li><a href="speakers.html">Charlas</a></li> -->
                                        <!-- <li><a href="expositores.html">Aliados</a></li> -->
                                    </ul> 
                                </li>
                                <li><a href="expositores.html" class="">Expositores</a></li>
                               
                                <li><a href="contacto.html" class="">Contacto</a></li>
                                <li><a href="https://congresoparques.com" class="">Congreso Parques</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->  
                        <div class="register-login">
                            <a href="https://app.podiumeeting.com/es/registro/congreso-parques-2024" class="nir-btn white">Registrarme <i class="fa fa-angle-right "></i></a>
                        </div>

                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image:url(images/header.png);">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center pt-14 pb-2">
                    <h5 class="theme mb-0">Expo Espacio Público</h5>
                    <h1 class="mb-0 white">Mapa de Expositores</h1>
                </div>
            </div>
        </div>
        <div class="bread-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 
    
        <?xml version="1.0" encoding="UTF-8"?>
        <div class="content-map">
        <svg class="mapasvg" id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 912.5 612">
          <defs>
            <style>
              .cls-1 {
                fill: #fff;
                stroke: #000;
                stroke-miterlimit: 10;
              }
        
              .cls-2 {
                fill: #71c2b0;
              }
        
              .cls-2, .cls-3 {
                stroke-width: 0px;
              }
        
              .cls-3 {
                fill: #52ad97;
              }
              .st0{fill:#71C2B0;}
	.st1{fill:#52AD97;}
	.st2{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;}
	.st3{fill:none;stroke:#7C7E84;stroke-width:3;stroke-miterlimit:10;}
	.st4{fill:#7C7E84;}
	.st5{fill-rule:evenodd;clip-rule:evenodd;}
            </style>
          </defs>
          <rect class="cls-2" x="9.9" y="48.5" width="892.7" height="510.8"/>
          <rect class="cls-3" x="673.5" y="48.5" width="229.1" height="381.9"/>
          <rect class="cls-1" x="92.9" y="48.5" width="35.9" height="24.3"/>
          <rect class="cls-1" x="131.8" y="48.5" width="35.9" height="24.3"/>
          <rect class="cls-1" x="170" y="48.5" width="35.9" height="24.3"/>
          <rect class="cls-1" x="207.9" y="48.5" width="35.9" height="24.3"/>
        
          <rect class="cls-1" x="255.6" y="123.1" width="34.4" height="34.4" onmouseover="showCard(event, 20)" onmouseout="hideCard(event, 20)"/>  <!--Reylaz-->
          <image class="cls-1" x="255.6" y="123.1" width="34.4" height="34.4" xlink:href=".\img\reylaz.png" onmouseover="showCard(event, 20)" onmouseout="hideCard(event, 20)"/>
        
          <rect class="cls-1" x="255.6" y="159.4" width="34.4" height="34.4" onmouseover="showCard(event, 23)" onmouseout="hideCard(event, 23)"/>  <!--Accesos Automaticos de Latam-->
          <image class="cls-1" x="255.6" y="159.4" width="34.4" height="34.4" xlink:href=".\img\ACCESOS.png" onmouseover="showCard(event, 23)" onmouseout="hideCard(event, 23)"/>
        
          <rect class="cls-1" x="218.6" y="123.1" width="34.4" height="34.4" onmouseover="showCard(event, 23)" onmouseout="hideCard(event, 28)"/> <!--CMIC-->
<image class="cls-1" x="227.2" y="131.7" width="17.2" height="17.2" xlink:href="./img/CMIC.png" onmouseover="showCard(event, 28)" onmouseout="hideCard(event, 28)"/>

          <rect class="cls-1" x="218.6" y="159.4" width="34.4" height="34.4" onmouseover="showCard(event, 21)" onmouseout="hideCard(event, 21)"/> <!--Musco--> 
          <image class="cls-1" x="218.6" y="159.4" width="34.4" height="34.4" xlink:href=".\img\MUSCO.png" onmouseover="showCard(event, 21)" onmouseout="hideCard(event, 21)"/>
        
        
          <rect class="cls-1" x="445" y="159.4" width="34.4" height="34.4" onmouseover="showCard(event, 2)" onmouseout="hideCard(event, 2)"/> <!--PdeMX-->
          <image class="cls-1" x="445" y="159.4" width="34.4" height="34.4" xlink:href=".\img\PdeMX.png" onmouseover="showCard(event, 2)" onmouseout="hideCard(event, 2)"/>
        
        
          <rect class="cls-1" x="407.9" y="159.4" width="34.4" height="34.4" onmouseover="showCard(event, 3)" onmouseout="hideCard(event, 3)"/> <!--Boden-->
          <image class="cls-1" x="407.9" y="159.4" width="34.4" height="34.4" xlink:href=".\img\Boden.png" onmouseover="showCard(event, 3)" onmouseout="hideCard(event, 3)"/> 
          <rect class="cls-1" x="407.9" y="123.1" width="71.4" height="34.4"   onmouseover="showCard(event, 1)" onmouseout="hideCard(event, 1)"/> <!--Anpr-->
          <image class="cls-1" x="407.9" y="123.1" width="72.4" height="35.4" xlink:href=".\img\Anpr_logo.png"  onmouseover="showCard(event, 1)" onmouseout="hideCard(event, 1)"/>
        
          <rect class="cls-1" x="524.1" y="123.1" width="71.4" height="34.4" onmouseover="showCard(event, 4)" onmouseout="hideCard(event, 4)"/> <!--Tu Parque Vivo-->
          <image class="cls-1" x="524.1" y="123.1" width="71.4" height="34.4" xlink:href=".\img\TPV.png" onmouseover="showCard(event, 4)" onmouseout="hideCard(event, 4)"/>
        
          <rect class="cls-1" x="524.1" y="159.4" width="71.4" height="34.4" onmouseover="showCard(event, 5)" onmouseout="hideCard(event, 5)"/> <!--Hunter-->
          <image class="cls-1" x="524.1" y="159.4" width="71.4" height="34.4" xlink:href=".\img\HUNTER.png" onmouseover="showCard(event, 5)" onmouseout="hideCard(event, 5)"/>
        
          <rect class="cls-1" x="181" y="123.1" width="34.4" height="70.7"/>
          <rect class="cls-1" x="179.3" y="233.5" width="52.8" height="70.7"/>
        
          <rect class="cls-1" x="235.5" y="233.5" width="52.8" height="70.7" onmouseover="showCard(event, 19)" onmouseout="hideCard(event, 19)"/> <!--Soportec-->
          <image class="cls-1" x="248.7" y="251.175" width="26.4" height="35.35" xlink:href="./img/soportec.png" onmouseover="showCard(event, 19)" onmouseout="hideCard(event, 19)"/>
        
        
          <rect class="cls-1" x="179.3" y="343.9" width="52.8" height="70.7"/>
          <rect class="cls-1" x="235.5" y="343.9" width="52.8" height="70.7"/>
        
          <rect class="cls-1" x="335.4" y="343.9" width="34" height="70.7" onmouseover="showCard(event, 14)" onmouseout="hideCard(event, 14)"/> <!--Vermee-->
          <image class="cls-1" x="335.4" y="343.9" width="34" height="70.7" xlink:href=".\img\vermeer.png" onmouseover="showCard(event, 14)" onmouseout="hideCard(event, 14)"/>
        
          <rect class="cls-1" x="63.5" y="381.4" width="34" height="70.7"/>
        
          <rect class="cls-1" x="100.2" y="381.4" width="34" height="70.7" onmouseover="showCard(event, 29)" onmouseout="hideCard(event, 29)"/> <!--ActiPark-->
          <image class="cls-1" x="100.2" y="381.4" width="34" height="70.7" xlink:href=".\img\actipark.png" onmouseover="showCard(event, 29)" onmouseout="hideCard(event, 29)"/>
        
          <rect class="cls-1" x="181" y="454.3" width="34" height="70.7"/>
        
          <rect class="cls-1" x="333.8" y="454.3" width="34" height="70.7" onmouseover="showCard(event, 17)" onmouseout="hideCard(event, 17)" /> <!--Rogusa-->
          <image class="cls-1" x="333.8" y="454.3" width="34" height="70.7" xlink:href=".\img\rogusa.png" onmouseover="showCard(event, 17)" onmouseout="hideCard(event, 17)" />
        
          <rect class="cls-1" x="639.5" y="343.9" width="34" height="68.8" onmouseover="showCard(event, 26)" onmouseout="hideCard(event, 26)"/>  <!--Proludic-->
          <image class="cls-1" x="639.5" y="343.9" width="34" height="68.8" xlink:href=".\img\proludic.png" onmouseover="showCard(event, 26)" onmouseout="hideCard(event, 26)"/>
          <rect class="cls-1" x="639.5" y="415.9" width="34" height="70.7" onmouseover="showCard(event, 27)" onmouseout="hideCard(event, 27)"/> <!--Basaltex-->
          <image class="cls-1" x="639.5" y="415.9" width="34" height="70.7" xlink:href=".\img\basaltex.png" onmouseover="showCard(event, 27)" onmouseout="hideCard(event, 27)"/>
          <rect class="cls-1" x="639.5" y="233.5" width="34" height="70.7" onmouseover="showCard(event, 25)" onmouseout="hideCard(event, 25)"/> <!--RainBird-->
          <image class="cls-1" x="639.5" y="233.5" width="34" height="70.7" xlink:href=".\img\RainBird.png" onmouseover="showCard(event, 25)" onmouseout="hideCard(event, 25)"/>
          <rect class="cls-1" x="639.5" y="84.3" width="34" height="109.5" onmouseover="showCard(event, 24)" onmouseout="hideCard(event, 24)"/>  <!--Deportan-->
          <image class="cls-1" x="639.5" y="84.3" width="34" height="109.5" xlink:href=".\img\deportan.png" onmouseover="showCard(event, 24)" onmouseout="hideCard(event, 24)"/>
          <rect class="cls-1" x="886.8" y="107.2" width="8.9" height="59.7"/>
          <rect class="cls-1" x="886.8" y="302.2" width="8.9" height="60.7"/>
          <rect class="cls-1" x="886.8" y="193.1" width="8.9" height="87.3"/>
          <rect class="cls-1" x="677.5" y="419.7" width="218.2" height="10.7"/>
          <rect class="cls-1" x="849.6" y="94.5" width="34" height="282.2"/>
        
          <rect class="cls-1" x="333.8" y="233.5" width="70.7" height="70.7" onmouseover="showCard(event, 6)" onmouseout="hideCard(event, 6)"/> <!--Padel Galis-->
<image class="cls-1" x="351.475" y="251.175" width="35.35" height="35.35" xlink:href="./img/PadelGalis.png" onmouseover="showCard(event, 6)" onmouseout="hideCard(event, 6)"/>
        
<rect class="cls-1" x="219.3" y="454.3" width="70.7" height="70.7" onmouseover="showCard(event, 18)" onmouseout="hideCard(event, 18)"/> <!--Mupa-->
<image class="cls-1" x="236.975" y="471.975" width="35.35" height="35.35" xlink:href="./img/mupa.png" onmouseover="showCard(event, 18)" onmouseout="hideCard(event, 18)"/>
        
          <rect class="cls-1" x="94.6" y="225.3" width="8.9" height="84.3"/> 
          <rect class="cls-1" x="63.5" y="456.4" width="70.7" height="70.7"/>
        
          <rect class="cls-1" x="408.7" y="233.5" width="70.7" height="70.7" onmouseover="showCard(event, 7)" onmouseout="hideCard(event, 7)"/> <!--EquiParques-->
<image class="cls-1" x="426.375" y="251.175" width="35.35" height="35.35" xlink:href="./img/Equiparque.png" onmouseover="showCard(event, 7)" onmouseout="hideCard(event, 7)"/>
        
          <rect class="cls-1" x="372.3" y="343.9" width="108.6" height="70.7" onmouseover="showCard(event, 13)" onmouseout="hideCard(event, 13)"/> <!--Jimumex-->
          <image class="cls-1" x="399.5" y="361.575" width="54.2" height="35.35" xlink:href="./img/JIMUMEX.png" onmouseover="showCard(event, 13)" onmouseout="hideCard(event, 13)"/>
        
          <rect class="cls-1" x="370.7" y="454.3" width="108.6" height="70.7" onmouseover="showCard(event, 15)" onmouseout="hideCard(event, 15)"/> <!--PlayClub-->
          <image class="cls-1" x="397.85" y="471.975" width="54.3" height="35.35" xlink:href="./img/Playclub.png" onmouseover="showCard(event, 15)" onmouseout="hideCard(event, 15)"/>
        
          <rect class="cls-1" x="524.1" y="233.5" width="70.7" height="70.7" onmouseover="showCard(event, 8)" onmouseout="hideCard(event, 8)"/> <!--Jumbo-->
          <image class="cls-1" x="541.775" y="251.175" width="35.35" height="35.35" xlink:href="./img/JUMBO.png" onmouseover="showCard(event, 8)" onmouseout="hideCard(event, 8)"/>
        
          <rect class="cls-1" x="527.9" y="343.9" width="70.7" height="70.7" onmouseover="showCard(event, 13)" onmouseout="hideCard(event, 13)"/> <!--Jimumex-->
          <image class="cls-1" x="545.575" y="361.575" width="35.35" height="35.35" xlink:href="./img/JIMUMEX.png" onmouseover="showCard(event, 13)" onmouseout="hideCard(event, 13)"/>
        
          <rect class="cls-1" x="524.1" y="454.3" width="70.7" height="70.7" onmouseover="showCard(event, 16)" onmouseout="hideCard(event, 16)"/> <!--Bugy-->
<image class="cls-1" x="541.775" y="471.975" width="35.35" height="35.35" xlink:href="./img/bugy.png" onmouseover="showCard(event, 16)" onmouseout="hideCard(event, 16)"/>
          <rect class="cls-1" x="333.4" y="123.1" width="70.7" height="70.7"/>
          <rect class="cls-1" x="63.8" y="123.1" width="70.7" height="70.7"/>
          <rect class="cls-1" x="383" y="48.5" width="34.4" height="35.8" onmouseover="showCard(event, 12)" onmouseout="hideCard(event, 12)"/> <!--Polyner-->
          <image class="cls-1" x="383" y="48.5" width="34.4" height="35.8" xlink:href=".\img\grupoplyner.png" onmouseover="showCard(event, 12)" onmouseout="hideCard(event, 12)"/>
          
          
          <rect class="cls-1" x="487.6" y="48.5" width="34.4" height="35.8" onmouseover="showCard(event, 9)" onmouseout="hideCard(event, 9)"/> <!--Seguiar-->
          <image class="cls-1" x="487.6" y="48.5" width="34.4" height="35.8" xlink:href=".\img\seguiar.png" onmouseover="showCard(event, 9)" onmouseout="hideCard(event, 9)"/>
          <rect class="cls-1" x="525.1" y="48.5" width="34.4" height="35.8"  onmouseover="showCard(event, 10)" onmouseout="hideCard(event, 10)"/><!--Wifri-->
          <image class="cls-1" x="525.1" y="48.5" width="34.4" height="35.8" xlink:href=".\img\wifri.png" onmouseover="showCard(event, 10)" onmouseout="hideCard(event, 10)"/>
          <rect class="cls-1" x="562.5" y="48.5" width="34.4" height="35.8" onmouseover="showCard(event, 11)" onmouseout="hideCard(event, 11)"/> <!--Parques Alegres-->
          <image class="cls-1" x="562.5" y="48.5" width="34.4" height="35.8"  xlink:href=".\img\parquesalegres.png" onmouseover="showCard(event, 11)" onmouseout="hideCard(event, 11)"/>
          <rect class="cls-1" x="676.2" y="436.9" width="226.4" height="122.5"/>
          <g id="iconos">
	<polyline class="st3" points="190.2,559.5 11.3,559.5 11.3,48.5 902.6,48.5 902.6,559.4 628.4,559.4 	"/>
	<line class="st3" x1="189" y1="559.4" x2="282.7" y2="559.4"/>
	<line class="st3" x1="407.5" y1="559.4" x2="501.3" y2="559.4"/>
	<g>
		<path d="M81.1,487.3h21.6c0.9,0,1.5,0.9,1.5,1.5v0.8c0,0.9-0.7,1.5-1.5,1.5H81.1c-0.9,0-1.5-0.9-1.5-1.5v-0.8
			C79.6,488,80.2,487.3,81.1,487.3z"/>
		<path d="M96.8,481.4c-0.6-0.6-1.3-1.1-2.1-1.4c1.2-0.9,2-2.3,2-4c0-2.7-2.2-4.9-4.9-4.9S87,473.3,87,476c0,1.6,0.8,3.1,2,4
			c-2.3,1-3.9,3.2-4.1,5.8h13.9C98.7,484.1,98,482.6,96.8,481.4L96.8,481.4z"/>
		<path d="M100.4,511.3H99l2-18.6H82.9l2,18.6h-1.5c-0.4,0-0.8,0.3-0.8,0.8s0.3,0.8,0.8,0.8h2.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0
			c0,0,0.1,0,0.1,0h14.5c0.4,0,0.8-0.3,0.8-0.8S100.9,511.3,100.4,511.3L100.4,511.3z"/>
		<path d="M82.6,482.3l1.8-1.8c0.3-0.3,0.3-0.8,0-1.1c-0.3-0.3-0.8-0.3-1.1,0l-2,2c-0.1,0.1-0.2,0.3-0.2,0.5v3.9h1.5L82.6,482.3z"/>
		<path d="M101.2,482.3v3.5h1.5v-3.9c0-0.2-0.1-0.4-0.2-0.5l-2-2c-0.3-0.3-0.8-0.3-1.1,0c-0.3,0.3-0.3,0.8,0,1.1L101.2,482.3z"/>
		<path d="M120.5,469.6h-11.6c-1.3,0-2.3,1-2.3,2.3v3.1h-3.9c-0.3,0-0.6,0.2-0.7,0.5c-0.1,0.3-0.1,0.6,0.2,0.8l4.4,4.4v1.2
			c0,1.3,1,2.3,2.3,2.3h11.6c1.3,0,2.3-1,2.3-2.3v-10C122.8,470.6,121.8,469.6,120.5,469.6L120.5,469.6z M118.2,480h-7
			c-0.4,0-0.8-0.3-0.8-0.8s0.3-0.8,0.8-0.8h7c0.4,0,0.8,0.3,0.8,0.8S118.6,480,118.2,480z M118.2,475.4h-7c-0.4,0-0.8-0.3-0.8-0.8
			s0.3-0.8,0.8-0.8h7c0.4,0,0.8,0.3,0.8,0.8S118.6,475.4,118.2,475.4z"/>
	</g>
	<g>
		<path d="M81.1,155.5h21.6c0.9,0,1.5,0.9,1.5,1.5v0.8c0,0.9-0.7,1.5-1.5,1.5H81.1c-0.9,0-1.5-0.9-1.5-1.5V157
			C79.6,156.2,80.2,155.5,81.1,155.5z"/>
		<path d="M96.8,149.5c-0.6-0.6-1.3-1.1-2.1-1.4c1.2-0.9,2-2.3,2-4c0-2.7-2.2-4.9-4.9-4.9c-2.7,0-4.9,2.2-4.9,4.9c0,1.6,0.8,3.1,2,4
			c-2.3,1-3.9,3.2-4.1,5.8h13.9C98.7,152.3,98,150.7,96.8,149.5L96.8,149.5z"/>
		<path d="M100.4,179.5H99l2-18.6H82.9l2,18.6h-1.5c-0.4,0-0.8,0.3-0.8,0.8s0.3,0.8,0.8,0.8h2.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0
			c0,0,0.1,0,0.1,0h14.5c0.4,0,0.8-0.3,0.8-0.8S100.9,179.5,100.4,179.5L100.4,179.5z"/>
		<path d="M82.6,150.4l1.8-1.8c0.3-0.3,0.3-0.8,0-1.1c-0.3-0.3-0.8-0.3-1.1,0l-2,2c-0.1,0.1-0.2,0.3-0.2,0.5v3.9h1.5L82.6,150.4z"/>
		<path d="M101.2,150.4v3.5h1.5v-3.9c0-0.2-0.1-0.4-0.2-0.5l-2-2c-0.3-0.3-0.8-0.3-1.1,0c-0.3,0.3-0.3,0.8,0,1.1L101.2,150.4z"/>
		<path d="M120.5,137.8h-11.6c-1.3,0-2.3,1-2.3,2.3v3.1h-3.9c-0.3,0-0.6,0.2-0.7,0.5s-0.1,0.6,0.2,0.8l4.4,4.4v1.2
			c0,1.3,1,2.3,2.3,2.3h11.6c1.3,0,2.3-1,2.3-2.3v-10C122.8,138.8,121.8,137.8,120.5,137.8L120.5,137.8z M118.2,148.2h-7
			c-0.4,0-0.8-0.3-0.8-0.8s0.3-0.8,0.8-0.8h7c0.4,0,0.8,0.3,0.8,0.8S118.6,148.2,118.2,148.2z M118.2,143.6h-7
			c-0.4,0-0.8-0.3-0.8-0.8s0.3-0.8,0.8-0.8h7c0.4,0,0.8,0.3,0.8,0.8S118.6,143.6,118.2,143.6z"/>
	</g>
	<g>
		<path d="M763.2,225.3h25.2c1,0,1.8,1,1.8,1.8v0.9c0,1-0.8,1.8-1.8,1.8h-25.2c-1,0-1.8-1-1.8-1.8v-0.9
			C761.4,226.2,762.2,225.3,763.2,225.3z"/>
		<path d="M781.5,218.4c-0.7-0.7-1.5-1.3-2.4-1.7c1.4-1,2.4-2.7,2.4-4.6c0-3.1-2.6-5.7-5.7-5.7s-5.7,2.6-5.7,5.7
			c0,1.9,0.9,3.6,2.4,4.6c-2.6,1.2-4.5,3.8-4.7,6.8h16.2C783.7,221.6,782.9,219.8,781.5,218.4L781.5,218.4z"/>
		<path d="M785.7,253.3H784l2.3-21.6h-21.1l2.3,21.6h-1.7c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9h2.5c0.1,0,0.2,0,0.2,0
			c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0h16.9c0.5,0,0.9-0.4,0.9-0.9C786.6,253.7,786.2,253.3,785.7,253.3L785.7,253.3z"/>
		<path d="M765,219.4l2.1-2.1c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-0.9-0.4-1.3,0l-2.3,2.3c-0.2,0.2-0.3,0.4-0.3,0.6v4.5h1.8L765,219.4z"
			/>
		<path d="M786.6,219.4v4.1h1.8V219c0-0.2-0.1-0.5-0.3-0.6l-2.3-2.3c-0.4-0.4-0.9-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3L786.6,219.4z"/>
		<path d="M809.1,204.7h-13.5c-1.5,0-2.7,1.2-2.7,2.7v3.6h-4.5c-0.4,0-0.7,0.2-0.8,0.6c-0.1,0.3-0.1,0.7,0.2,1l5.1,5.1v1.4
			c0,1.5,1.2,2.7,2.7,2.7h13.5c1.5,0,2.7-1.2,2.7-2.7v-11.7C811.8,205.9,810.6,204.7,809.1,204.7L809.1,204.7z M806.4,216.8h-8.1
			c-0.5,0-0.9-0.4-0.9-0.9c0-0.5,0.4-0.9,0.9-0.9h8.1c0.5,0,0.9,0.4,0.9,0.9C807.3,216.4,806.9,216.8,806.4,216.8z M806.4,211.4
			h-8.1c-0.5,0-0.9-0.4-0.9-0.9c0-0.5,0.4-0.9,0.9-0.9h8.1c0.5,0,0.9,0.4,0.9,0.9C807.3,211,806.9,211.4,806.4,211.4z"/>
	</g>
	<g>
		<path d="M114.3,56.7c0-2-1.5-4.2-2.8-4.2c-1.4,0-2.9,2.2-2.9,4.2c0,1.6,0.8,2.6,1.9,2.9l-0.1,9.1c0,0.6,0.5,1.1,1,1.1
			c0.6,0,1.1-0.5,1-1.1l-0.1-9.1C113.5,59.3,114.3,58.3,114.3,56.7z"/>
		<path d="M106.8,52.9c-0.3,0-0.5,0.2-0.5,0.5v3.8c0,0.1-0.1,0.2-0.2,0.2h-0.5c-0.1,0-0.2-0.1-0.2-0.2v-3.8c0-0.2-0.2-0.4-0.5-0.4
			c-0.3,0-0.5,0.2-0.5,0.5v3.8c0,0.1-0.1,0.2-0.2,0.2h-0.5c-0.1,0-0.2-0.1-0.2-0.2v-3.8c0-0.3-0.2-0.5-0.5-0.5
			c-0.3,0-0.5,0.2-0.5,0.5v4.6c0,0.8,0.6,1.4,1.4,1.5l-0.1,9.3c0,0.6,0.5,1.1,1,1.1c0.6,0,1.1-0.5,1-1.1l-0.1-9.3
			c0.8-0.1,1.4-0.7,1.4-1.5v-4.6C107.3,53.1,107.1,52.9,106.8,52.9z"/>
	</g>
	<g>
		<path d="M158.2,56.7c0-2-1.5-4.2-2.8-4.2s-2.9,2.2-2.9,4.2c0,1.6,0.8,2.6,1.9,2.9l-0.1,9.1c0,0.6,0.5,1.1,1,1.1s1.1-0.5,1-1.1
			l-0.1-9.1C157.4,59.3,158.2,58.3,158.2,56.7z"/>
		<path d="M150.7,52.9c-0.3,0-0.5,0.2-0.5,0.5v3.8c0,0.1-0.1,0.2-0.2,0.2h-0.5c-0.1,0-0.2-0.1-0.2-0.2v-3.8c0-0.2-0.2-0.4-0.5-0.4
			c-0.3,0-0.5,0.2-0.5,0.5v3.8c0,0.1-0.1,0.2-0.2,0.2h-0.5c-0.1,0-0.2-0.1-0.2-0.2v-3.8c0-0.3-0.2-0.5-0.5-0.5
			c-0.3,0-0.5,0.2-0.5,0.5v4.6c0,0.8,0.6,1.4,1.4,1.5l-0.1,9.3c0,0.6,0.5,1.1,1,1.1s1.1-0.5,1-1.1l-0.1-9.3c0.8-0.1,1.4-0.7,1.4-1.5
			v-4.6C151.1,53.1,150.9,52.9,150.7,52.9z"/>
	</g>
	<g>
		<path d="M194.7,56.7c0-2-1.5-4.2-2.8-4.2c-1.4,0-2.9,2.2-2.9,4.2c0,1.6,0.8,2.6,1.9,2.9l-0.1,9.1c0,0.6,0.5,1.1,1,1.1
			s1.1-0.5,1-1.1l-0.1-9.1C193.9,59.3,194.7,58.3,194.7,56.7z"/>
		<path d="M187.2,52.9c-0.3,0-0.5,0.2-0.5,0.5v3.8c0,0.1-0.1,0.2-0.2,0.2H186c-0.1,0-0.2-0.1-0.2-0.2v-3.8c0-0.2-0.2-0.4-0.5-0.4
			c-0.3,0-0.5,0.2-0.5,0.5v3.8c0,0.1-0.1,0.2-0.2,0.2h-0.5c-0.1,0-0.2-0.1-0.2-0.2v-3.8c0-0.3-0.2-0.5-0.5-0.5
			c-0.3,0-0.5,0.2-0.5,0.5v4.6c0,0.8,0.6,1.4,1.4,1.5l-0.1,9.3c0,0.6,0.5,1.1,1,1.1s1.1-0.5,1-1.1l-0.1-9.3c0.8-0.1,1.4-0.7,1.4-1.5
			v-4.6C187.6,53.1,187.4,52.9,187.2,52.9z"/>
	</g>
	<g>
		<path d="M230.2,56.7c0-2-1.5-4.2-2.8-4.2s-2.9,2.2-2.9,4.2c0,1.6,0.8,2.6,1.9,2.9l-0.1,9.1c0,0.6,0.5,1.1,1,1.1s1.1-0.5,1-1.1
			l-0.1-9.1C229.4,59.3,230.2,58.3,230.2,56.7z"/>
		<path d="M222.7,52.9c-0.3,0-0.5,0.2-0.5,0.5v3.8c0,0.1-0.1,0.2-0.2,0.2h-0.5c-0.1,0-0.2-0.1-0.2-0.2v-3.8c0-0.2-0.2-0.4-0.5-0.4
			c-0.3,0-0.5,0.2-0.5,0.5v3.8c0,0.1-0.1,0.2-0.2,0.2h-0.5c-0.1,0-0.2-0.1-0.2-0.2v-3.8c0-0.3-0.2-0.5-0.5-0.5
			c-0.3,0-0.5,0.2-0.5,0.5v4.6c0,0.8,0.6,1.4,1.4,1.5l-0.1,9.3c0,0.6,0.5,1.1,1,1.1s1.1-0.5,1-1.1l-0.1-9.3c0.8-0.1,1.4-0.7,1.4-1.5
			v-4.6C223.1,53.1,222.9,52.9,222.7,52.9z"/>
	</g>
	<line class="st3" x1="673.5" y1="84.3" x2="673.5" y2="48.5"/>
	<g>
		<path d="M78.8,271.9c0.2-0.4,0.1-0.8-0.2-1.1l-4.5-4.7c-0.4-0.4-1.1-0.4-1.5,0l-1.4,1.5l-2.8-2.9c-0.4-0.4-1.1-0.4-1.5,0l-4.5,4.8
			c1,0.8,1.9,1.8,2.4,3.1h13C78.3,272.6,78.7,272.3,78.8,271.9z"/>
		<circle cx="73.3" cy="260.9" r="2.2"/>
		<path d="M84.1,252.6H55.8c-0.8,0-1.4,0.6-1.4,1.4v5.2c0.6-0.2,1.4-0.3,2.1-0.3c0.2,0,0.5,0,0.6,0v-3.5h25.6v20.4H65.5l0.3,2.4
			c0,0.1,0,0.2,0,0.3h18.3c0.8,0,1.4-0.6,1.4-1.4V254C85.5,253.2,84.9,252.6,84.1,252.6z"/>
		<path d="M60.8,271.1c-1.2,0.9-2.7,1.6-4.3,1.6c-1.6,0-3.2-0.6-4.3-1.6c-1.2,0.8-2.1,2.1-2.3,3.6l-0.5,3.7
			c-0.1,0.7,0.4,1.4,1.1,1.5c1.9,0.4,3.9,0.6,6,0.6c2.1,0,4.1-0.2,6-0.6c0.7-0.2,1.1-0.8,1.1-1.5l-0.5-3.7
			C62.9,273.2,62,271.9,60.8,271.1z"/>
		<circle cx="56.5" cy="265.7" r="4.6"/>
	</g>
	<path d="M341.4,166.4v-9.9c0-2.9,2.3-5.2,5.2-5.2c2.9,0,5.2,2.3,5.2,5.2c0,0,0,0,0,0v8.7h4.1c2.9,0,5.2,2.3,5.2,5.2c0,0,0,0,0,0
		v12.1h-6.4v-10.9h-8.1C343.7,171.6,341.4,169.3,341.4,166.4z M388.4,151.3c-2.9,0-5.2,2.3-5.2,5.2v8.7h-4.1c-2.9,0-5.2,2.3-5.2,5.2
		c0,0,0,0,0,0v12.1h6.4v-10.9h8.1c2.9,0,5.2-2.3,5.2-5.2v-9.9C393.6,153.6,391.3,151.3,388.4,151.3z M346.6,148.3
		c2.9,0,5.2-2.3,5.2-5.2c0-2.9-2.3-5.2-5.2-5.2s-5.2,2.3-5.2,5.2C341.4,146,343.7,148.3,346.6,148.3L346.6,148.3z M388.4,148.3
		c2.9,0,5.2-2.3,5.2-5.2c0-2.9-2.3-5.2-5.2-5.2c-2.9,0-5.2,2.3-5.2,5.2l0,0C383.2,146,385.6,148.3,388.4,148.3z M364.9,182.5h5.2
		v-21.6h8.2v-5.2h-21.5v5.2h8.2V182.5z"/>
	<g>
		<g>
			<path d="M457.7,56.4c0-1.2-1-2.2-2.2-2.2s-2.2,1-2.2,2.2c0,1.2,1,2.2,2.2,2.2C456.8,58.5,457.7,57.6,457.7,56.4L457.7,56.4z"/>
		</g>
		<g>
			<path d="M455.6,59.3h-2.2c-0.4,0-0.7,0.2-0.9,0.5l-2.3,4.4c-0.1,0.1-0.1,0.3-0.1,0.5V67c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9
				v-1.8c0-0.2,0-0.3,0.1-0.5l0.6-1.2c0.1-0.1,0.2-0.2,0.3-0.2c0.2,0,0.4,0.2,0.4,0.4v13.2c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9
				v-8.4c0-0.2,0.2-0.4,0.4-0.4h0h0c0.2,0,0.4,0.2,0.4,0.4v8.4c0,0.5,0.4,0.9,0.9,0.9c0.5,0,0.9-0.4,0.9-0.9V63.7
				c0-0.1,0.1-0.3,0.2-0.3c0.2-0.1,0.4,0,0.5,0.2l0.6,1.2c0.1,0.1,0.1,0.3,0.1,0.5V67c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9v-2.3
				c0-0.2,0-0.3-0.1-0.5l-2.3-4.4c-0.2-0.3-0.5-0.5-0.9-0.5H455.6z"/>
		</g>
		<g>
			<path d="M471.2,70.8v6.1c0,0.5-0.4,0.9-0.9,0.9c-0.5,0-0.9-0.4-0.9-0.9v-6.1h-2.2l2.2-7.1c0-0.2-0.2-0.4-0.4-0.4
				c-0.1,0-0.3,0.1-0.3,0.2l-0.6,1.2c-0.1,0.1-0.1,0.3-0.1,0.5V67c0,0.5-0.4,0.9-0.9,0.9c-0.5,0-0.9-0.4-0.9-0.9v-2.3
				c0-0.2,0-0.3,0.1-0.5l2.3-4.4c0.2-0.3,0.5-0.5,0.9-0.5h2.2h2.2c0.4,0,0.7,0.2,0.9,0.5l2.3,4.4c0.1,0.1,0.1,0.3,0.1,0.5V67
				c0,0.5-0.4,0.9-0.9,0.9c-0.5,0-0.9-0.4-0.9-0.9v-1.8c0-0.2,0-0.3-0.1-0.5l-0.6-1.2c-0.1-0.2-0.3-0.2-0.5-0.2
				c-0.1,0.1-0.2,0.2-0.2,0.3l2.2,7.1h-2.2v6.1c0,0.5-0.4,0.9-0.9,0.9c-0.5,0-0.9-0.4-0.9-0.9v-6.1H471.2z"/>
		</g>
		<g>
			<path d="M473.8,56.4c0-1.2-1-2.2-2.2-2.2c-1.2,0-2.2,1-2.2,2.2c0,1.2,1,2.2,2.2,2.2S473.8,57.6,473.8,56.4L473.8,56.4z"/>
		</g>
		<g>
			<rect x="462.8" y="56.4" width="1.6" height="21.5"/>
		</g>
	</g>
	<g>
		<g>
			<rect x="343.8" y="575.2" class="st4" width="3" height="15.5"/>
		</g>
		<g>
			<g>
				<polygon class="st4" points="338,577.4 345.3,564.7 352.6,577.4 				"/>
			</g>
		</g>
	</g>
	<g>
		<g>
			<rect x="558" y="575.2" class="st4" width="3" height="15.5"/>
		</g>
		<g>
			<g>
				<polygon class="st4" points="552.1,577.4 559.4,564.7 566.8,577.4 				"/>
			</g>
		</g>
	</g>
	<g>
		<g>
			<rect x="638.8" y="321.1" class="st4" width="15.5" height="3"/>
		</g>
		<g>
			<g>
				<polygon class="st4" points="652.1,315.3 664.8,322.6 652.1,329.9 				"/>
			</g>
		</g>
	</g>
	<g>
		<g>
			<rect x="638.8" y="213.5" class="st4" width="15.5" height="3"/>
		</g>
		<g>
			<g>
				<polygon class="st4" points="652.1,207.7 664.8,215 652.1,222.3 				"/>
			</g>
		</g>
	</g>
	<path class="st5" d="M767.1,526.1c-0.3,0-0.6-0.3-0.6-0.6c0,0,0,0,0-0.1c0.4-7.2,6.5-12.8,13.7-12.4c6.7,0.3,12.1,5.7,12.4,12.4
		c0,0.2,0,0.3-0.2,0.4C792.1,526.4,769.6,526.1,767.1,526.1L767.1,526.1z M797.1,472.9c1.3,0.3,2.6,0.8,3.7,1.6l1.4-1.4
		c0.2-0.2,0.6-0.3,0.9-0.1c1.1,0.8,2,1.8,2.9,2.9c0.2,0.3,0.2,0.6-0.1,0.9l-1.4,1.4c0.7,1.2,1.3,2.4,1.6,3.7h2
		c0.3,0,0.6,0.2,0.7,0.6c0.2,1.3,0.2,2.7,0,4c0,0.3-0.3,0.6-0.7,0.6h-2c-0.3,1.3-0.8,2.6-1.6,3.7l1.4,1.4c0.2,0.2,0.3,0.6,0.1,0.9
		c-0.8,1.1-1.8,2-2.9,2.9c-0.3,0.2-0.6,0.2-0.9-0.1l-1.4-1.4c-1.1,0.7-2.4,1.3-3.7,1.6v2c0,0.3-0.2,0.6-0.6,0.7
		c-1.3,0.2-2.7,0.2-4,0c-0.3,0-0.6-0.3-0.6-0.7v-2c-1.3-0.3-2.6-0.8-3.7-1.6l-1.4,1.4c-0.2,0.2-0.6,0.3-0.9,0.1
		c-1.1-0.8-2-1.8-2.9-2.9c-0.2-0.3-0.2-0.6,0.1-0.9l1.4-1.4c-0.7-1.1-1.3-2.4-1.6-3.7h-2c-0.3,0-0.6-0.2-0.7-0.6
		c-0.2-1.3-0.2-2.7,0-4c0-0.3,0.3-0.6,0.7-0.6h2c0.3-1.3,0.8-2.6,1.6-3.7l-1.4-1.4c-0.2-0.2-0.3-0.6-0.1-0.9c0.8-1.1,1.8-2,2.9-2.9
		c0.3-0.2,0.6-0.2,0.9,0.1l1.5,1.4c1.1-0.7,2.4-1.3,3.7-1.6v-2c0-0.3,0.2-0.6,0.6-0.7c1.3-0.2,2.7-0.2,4,0c0.3,0,0.6,0.3,0.6,0.7
		V472.9z M794.5,477.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3C801.8,480.5,798.5,477.2,794.5,477.2
		L794.5,477.2z M809.4,497c-4.1,0-7.5,3.3-7.5,7.5c0,4.1,3.3,7.5,7.5,7.5c4.1,0,7.5-3.3,7.5-7.5c0,0,0,0,0,0
		C816.9,500.3,813.5,497,809.4,497L809.4,497z M821.9,526.1h-25c-0.3,0-0.6-0.3-0.6-0.6c0,0,0,0,0-0.1c0.4-7.2,6.5-12.8,13.7-12.4
		c6.7,0.3,12.1,5.7,12.4,12.4C822.5,525.8,822.3,526.1,821.9,526.1C821.9,526.1,821.9,526.1,821.9,526.1z M779.6,497
		c-4.1,0-7.5,3.3-7.5,7.5s3.3,7.5,7.5,7.5c4.1,0,7.5-3.3,7.5-7.5c0,0,0,0,0,0C787,500.3,783.7,497,779.6,497
		C779.6,497,779.6,497,779.6,497z"/>
</g>
       
        </svg>
        </div>
        <section class="contact-main pb-8" style="background-image: url(images/testimonial-1.png);">
    <div class="container">
        <div class="contact-info-main mt-0">
            <div class="section-title mb-5 w-75 mx-auto text-center">
                <h3 class="h-title">Contáctanos</h3>
                <h4 class="theme">Habla con nosotros</h4>
                <div class="selector4" style="display: flex; justify-content: center;">
                    <h2 class="ah-headline mb-0">
                        <span>¿Te gustaria ser </span>
                        <span class="ah-words-wrapper white theme">
                            <b class="is-visible textcap">Expositor?</b>
                            <b>Expositor?</b>
                        </span>
                    </h2>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-info-content row mb-1">
                    <!-- Location Info -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-item bg-grey px-4 py-5 border-all text-center">
                            <div class="info-icon mb-2 bg-theme rounded-circle mx-auto">
                                <i class="fa fa-map-marker-alt white"></i>
                            </div>
                            <div class="info-content">
                                <h5>Centro de Convenciones Siglo XXI</h5>
                                <p class="mb-0">Calle 60 Norte Número 299e Ex Cordemex, Colonia Revolución, C.P 97118</p>
                            </div>
                        </div>
                    </div>
                    <!-- Phone Info -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-item bg-grey px-4 py-5 border-all text-center">
                            <div class="info-icon mb-2 bg-theme rounded-circle mx-auto">
                                <i class="fa fa-phone white"></i>
                            </div>
                            <div class="info-content">
                                <h5>Teléfonos</h5>
                                <p class="m-0">Llamadas: (+52) 999 944 4060</p>
                                <p class="m-0">Whatsapp: (+52) 999 960 0765</p>
                            </div>
                        </div>
                    </div>
                    <!-- Email Info -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="info-item bg-grey px-4 py-5 border-all text-center">
                            <div class="info-icon mb-2 bg-theme rounded-circle mx-auto">
                                <i class="fa fa-envelope white"></i>
                            </div>
                            <div class="info-content">
                                <h5>Correos</h5>
                                <p class="m-0">comercial@congresoparques.com</p>
                                <p class="m-0">expo@congresoparques.com</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of contact-info-content -->
            </div> <!-- End of contact-info -->
        </div> <!-- End of contact-info-main -->
    </div> <!-- End of container -->
</section>

        <?php
        $sql = "SELECT * FROM expositores";
        $result = $conexion->query($sql);
        
        $expositores = [];
        
        while($mostrar = mysqli_fetch_assoc($result)) {
            $expositores[] = $mostrar;
        }
        ?>
        
        <script>
            const expositores = <?php echo json_encode($expositores); ?>;
        </script>
        <div id="stand-card" class="card" style="display: none; position: absolute; background-color: white; padding: 20px; border: 1px solid black;">
          <img id="stand-img" alt="Imagen del stand">
          <h4 style="font-weight: bold; color: #ffffff !important;">EMPRESA:</h4><span id="stand-title"></span>
          <hr class="custom-line">
          <h4 style="font-weight: bold; color: #ffffff !important;">CATEGORIA:</h4><span id="stand-categori"></span>
          <hr class="custom-line">
          <a id="stand-button" class="button-expositor" href="#" target="_blank"><strong style="font-weight: bold;">Visitar Sitio</strong></a>
        </div>
        </div>
       
        </div>
        

    <!-- footer starts -->
    <footer class="pt-12 pb-7" style="background-image: url(images/pexels-sascha.png);">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 pe-lg-4">
                    <div class="footer-about">
                        <img src="images/logo-white.png" alt="">
                        <p class="mt-3 mb-3 white">
                            Expo Espacio Público es una exposición especializada que se realiza dentro del Congreso Parques 2024
                        </p>
                        <!-- Redes sociales -->

                        <div class="social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=61561017306167 "><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <!-- <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li> -->
                                <li><a href="https://www.instagram.com/expoespaciopublico?igsh=dGF6aXA2cG9uazVh&utm_source=qr "><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <!-- <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5">
                    <div class="footer-links">
                        <h4 class="white mb-4">Enlaces Importantes</h4>
                        <ul class="list">
                            <li class="pb-2"><a href="detalles-evento.html">Detalles del evento</a></li>
                            <li class="pb-2"><a href="visitantes.html">Visitantes</a></li>
                            <li class="pb-2"><a href="expositores.html">Expositores</a></li>
                            <li><a href="contacto.html">Contactános</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="footer-links">
                        <h4 class="white mb-4">Contáctanos</h4>
                        <p class="mb-3">Colonia Montecristo, Mérida, Yucatán</p>
                        <div class="footer-contact d-flex align-items-center mb-3">
                            <i class="fa fa-phone white fs-4"></i>
                            <div class="footer-contact-content ps-3">
                                <h6 class="white mb-0">+52 944 40 60</h6>
                                <small class="white">Para más información</small>
                            </div>
                        </div>
                        <div class="footer-contact d-flex align-items-center">
                            <i class="fa fa-envelope white fs-4"></i>
                            <div class="footer-contact-content ps-3">
                                <h6 class="white mb-0">expo@congresoparques.com</h6>
                                <small class="white">Email </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="footer-links">
                        <h4 class="white mb-4">Suscríbete al Boletín</h4>
                        <div class="newsletter-form ">
                            <p class="mb-3">Mantente al día con toda la información de Expo Espacio Público</p>
                            <form action="#" method="get" accept-charset="utf-8" class="border-0">
                                <input type="text" placeholder="Email" class="w-100 mb-2">
                                <button class="nir-btn w-100">Subscribirme</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="theme-overlay opacity-90"></div>
    </footer>
    <div class="footer-copyright bg-theme1">
        <div class="container">
            <p class="m-0 white text-center py-3">Copyright ©2024. Todos los derechos reservados</p>
        </div>
    </div>
    <!-- footer ends -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>


    <!-- *Scripts* -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-nav.js"></script>
</body>

</html>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/mapa.js"></script>
 
 