<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php","",$archivo);
    if($pagina == 'invitados' || $pagina == 'index'){
      echo '<link rel="stylesheet" href="css/colorbox.css">';
    }else if($pagina == 'conferencia'){
      echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
  ?>  
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  
    <header class="site-header">
      <div class="hero">
          <div class="contenido-header">
            <nav class="redes-sociales">
              <a href="#"><i class="fab fa-facebook-square"></i></a>
              <a href="#"><i class="fab fa-whatsapp-square"></i></a>
              <a href="#"><i class="fab fa-twitter-square"></i></a>
              <a href="#"><i class="fab fa-youtube-square"></i></a>
            </nav>
            <div class="datos-contacto">
              <div class="clearfix">
                  <p class="direccion"><i class="fas fa-map-marker"></i>Calle Elouterio Flores Local 10PB</p>
                  <p class="ciudad"><i class="fas fa-flag"></i>Oruro, BO</p>
              </div>
              <h1 class="nombre-sitio">Barbarian Nerd</h1>
              <p class="slogan">El mejor lugar para armar tu <span>PC Gamer</span></p>
            </div>
           
          </div>
      </div> <!--.hero-->
    </header>
    <div class="barra">
      <div class="contenedor clearfix">
          <div class="logo">
              <a href="index.php">
              <img src="img/logoBarbarian.svg" alt="Barbarian Nerd">
              </a>
          </div>
          <div class="menu-movil">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <nav class="navegacion-principal clearfix">
              <a href="conferencia.php">Pc a medida</a>
              <a href="calendario.php">Workstation</a>
              <a href="invitados.php">Pc Gamer</a>
              <a href="contacto.php">Contacto</a>
          </nav>
      </div><!--.contenedor-->
    </div><!--barra-->