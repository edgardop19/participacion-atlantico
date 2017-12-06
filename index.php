<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Participación Atlántico</title>

	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/datatables.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/faviconn.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body ng-cloak="" class="homepage" ng-app="docs">
  <!--
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +57 5 3307131  -  interior@atlantico.gov.co</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/GobernaciondelAtlantico/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Gobatlantico"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div> -->

      <!---  <nav class="navbar navbar-inverse header" role="banner"> -->
        <header class="header">
          <div class="container">
            <a href="#/"><img class="logoHeader" src="images/logoheader.png" alt="logo"></a>  
          </div>          
        </header>
          <nav class="navbar navbar-inverse navBarGob" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="/#/"><img src="images/logo.png" alt="logo"></a> -->
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav navBarGob">
                        <li><a href="/#/">Inicio</a></li>
                        <li><a href="#/about-us">Quiénes Somos</a></li>
                        <li><a  class="dropdown-toggle" data-toggle="dropdown">Normatividad <i class="fa fa-angle-down"></i></a>
                    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                              <li class="dropdown-submenu">
                                <a tabindex="-1" >Subdirecciones</a>
                                <ul class="dropdown-menu">
                                  <li><a tabindex="-1" href="/docp/ddhh.pdf">Derechos Humanos</a></li>
                                  <li><a href="#/victimas">Víctimas</a></li>
                                </ul>
                              </li>
                              <li class="divider"></li>
                              <li >
                                <a tabindex="-1" href="docs/DECRETO 2350.pdf">Decreto 2350 JAC</a>
                              </li>
                              <li class="dropdown-submenu">
                                <a tabindex="-1" >Elecciones de JAC</a>
                                <ul id="list" class="dropdown-menu">
                                  <li><a tabindex="-1" href="/docp/8. REGISTRO DE POSTULACIONES.pdf">Postulaciónes</a></li>
                                  <li><a href="/docp/9. POSTULACION LISTA.pdf">Postulación lista</a></li>
                                  <li><a href="/docp/10. POSTULACION PLANCHA.pdf">Postulación plancha</a></li>
                                  <li><a href="/docp/7. DIRECTORIO.pdf">Directorio</a></li>
                                  <li><a href="/docp/6. REGISTRO DE VOTANTES.pdf">Registro de votantes</a></li>
                                  <li><a href="/docp/5. RIRE.pdf">Reporte inicial RIRE</a></li>
                                  <li><a href="/docp/2. ACTA PARCIAL DE ESCRUTINIOS.pdf">Actas de escritinios</a></li>
                                  <li><a href="/docp/3. ACTA FINAL DE ELECCION DIRECTA.pdf">Acta final de elección</a></li>
                                </ul>
                              </li>
                            </ul>
                        </li>
                      <!--  <li><a href="services.html">Servicios</a></li> -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Contenidos <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="juntas.html">JAC</a></li>
                                <li><a href="#/cert">Certificados</a></li>
                            </ul>
                        </li>
                        <li><a href="#/blog">Comunicaciones</a></li>
                        <li><a href="#/contact-us">Contácto</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

   <div data-ng-view="" id="ng-view" class=""></div>

  <!-- <footer id="footer" class="midnight-blue"> -->
    <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 infoFooter">
                <p class="infoFooter"> © 1998-2015 Gobernación del Atlántico - Calle 40 Cra. 45 y 46 - Barranquilla, Colombia </br>
                  Teléfono (57+0*5)3307000 - Fax (57+0*5)3307444 - Línea Gratuita 018000425888 - Código DANE: 08-000 Código Postal 080003 </br>
                  NIT Dpto del Atlántico: 890102006-1 - <a href="http://http://www.atlantico.gov.co/index.php/condiciones-de-uso">Condiciones de Uso de la Información</a> - <a href="http://www.atlantico.gov.co/index.php/presentacion-56985">Quejas y Reclamos</a></br>
                  <a href="http://www.atlantico.gov.co/index.php/presentacion-56985">Horario de Atención</a> - <a href="http://www.atlantico.gov.co/index.php/directorio-general-50105">Contáctenos</a> - <a href="http://www.atlantico.gov.co/index.php/notificaciones-judiciales">Notificaciones Judiciales</a>
                </p>
            </div>
            <div class="col-sm-2">
                <ul class="pull-right">
                    <li><a href="#/">Inicio</a></li>
                    <li><a href="#/about-us">Quienes Somos</a></li>
                    <li><a href="#/blog">Comunicaciones</a></li>
                    <li><a href="#/contact-us">Contáctenos</a></li>
                    <li><a href="login.html">Administración</a></li>
                </ul>
            </div>
          </div>
        </div> 
    </footer><!--/#footer-->

 

 <script src="js/jquery.js"></script>
   <script src="js/angular.min.js"></script> 
    <script src="js/angular-route.min.js"></script>
     <script src="js/datatables.min.js"></script>
    <script src="js/angular-datatables.min.js"></script>
  <!--  <script src="js/scripts.js"></script> -->
    <script src="js/scripts2.js"></script> 
    <!--<script src="controllers/homeController.js"></script>-->
    <script src="controllers/munController.js"></script>
    <script src="controllers/contentController.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script async src="js/wid.js" charset="utf-8"></script>
    </body>   
</html>

