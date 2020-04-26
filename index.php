<?php 
   include("abrir_conexion_Suscribirse.php");
   
    
    session_start();

//prueba

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Beatus Ille - Multipurpose bootstrap site template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <ul class="topmenu">
  
              </ul>
            </div>
            <div class="span6">
             
            </div>
          </div>
        </div>
      </div>
      <div class="container">

              <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.php"><i class="icon-tint"></i> Beatus Ille</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="index.php">Inicio</a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Opciones <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="Suscribirse.php">Suscribirse</a></li>
                        <li><a href="Entrar.php">Iniciar Sesion</a></li>
                        <li><a href="tabla_productos_2.php">Ver Catalogo de productos</a></li>
                        
                      

                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#"> Información <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="Acerca_de.php">Acerca de</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                    </li>

                    <ul class="nav topnav">
                    <li class="active">
                    </li>

                    <?php 
                        if(!isset($_SESSION['u_sesion'])){
                         ?>
                     <li class="dropdown">
                      <a class="dropwdown" href="#Entrar"> Usuario</a>
                      

                     </li>
                    <?php } else{?>
                      <li class="dropdown" href="#Entrar"> <a class="dropwdown" href="#Entrar"><?php  echo $_SESSION['u_nombre']; ?> </a>
                      </li>
                       <?php }?>


                       <?php 
                        if(isset($_SESSION['u_sesion'])){
                         ?>
                       <li class="dropdown">
                      <a href="Cerrar_sesion.php"> Salir </i></a>
                      <?php 
                        }
                        ?>
                      
                        
                      
                       </li>


                     
                      
                  
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- section intro -->
    <section id="intro">
      <div class="intro-content">
        <h2> Beatus ille</h2>
        <h3>Lorem ipsum dolor sit amet, elit persecuti efficiendi</h3>
 
      </div>
    </section>
    <!-- /section intro -->

    <section id="content">
      <div class="container">


        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-info badge-circled">1</span>
                    
                  </div>
                  <div class="text">
                    <h4><strong>VISIÓN</strong></h4>
                    <p>
                     "BEATUS ILLE" palabra en latín traducida como dichoso aquel, usada para recordar el amor al pasado, y a las antiguedades.
                    </p>
                    
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-success badge-circled">2</span>
                    
                  </div>
                  <div class="text">
                    <h4><strong>MISIÓN</strong></h4>
                    <p>
                      Sitio se encarga de facilitar el contacto entre compradores y vendedores unidos por su amor por las antiguedades
                    </p>
                    
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-warning badge-circled">3</span>
                    
                  </div>
                  <div class="text">
                    <h4><strong>¿QUE HACEMOS?</strong></h4>
                    <p>
                      Nos encargamos de darle a nuestros clientes el mejor servicio, contamos con una serie de herramientas que faciliten y aseguren su intercambio.
                      Buscamos convertirnos en un punto de referencia para todos los amantes de las antiguedades.
                    </p>
                    
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-important badge-circled">4</span>
                    
                  </div>
                  <div class="text">
                    <h4><strong>SERVICIOS</strong></h4>
                    <p>
                      Flexibilidad en pagos
                    </p>
                    <p>
                      Planes de pago
                    </p>
                      Cotejo de precio de productos
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="span12">
            <div class="cta-box">
              <div class="row">
                <div class="span8">
                  <div class="cta-text">
                    
                </div>

              </div>


            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="offer">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <div class="aligncenter">
                  
                  <blockquote>
                    "Desde arcas de la perdición hasta libros de colección, si tu quieres ganar un poco de dinero
                    y a la vez asegurarte que ese artículo de gran valor quede en buenas manos este es el lugar".
                  </blockquote>
                </div>
              </div>
            </div>

            <div class="row">

            
             
    </section>

    <section id="works">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h3>Tipos de Antiguedades subastadas</h3>
            <div class="row">

              <div class="grid cs-style-3">
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/dummiesjpg/works/1." alt=""></div>
                      <figcaption>
                        <h3>Portfolio name</h3>
                        <p>
                          <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/dummies/works/2.jpg" alt=""></div>
                      <figcaption>
                        <h3>Amazing Fantasy #1. Valuado en $20,000</h3>
                        <p>
                          <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/dummies/works/3.jpg" alt=""></div>
                      <figcaption>
                        <h3>Pianoforte aleman, valuado en $46,000</h3>
                        <p>
                          <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="img/dummies/works/4.jpg" alt=""></div>
                      <figcaption>
                        <h3>Máscara de Pakal. Valuada en $1000,000</h3>
                        <p>
                          <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                          <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.php"><i class="icon-tint"></i> Beatus Ille</a></h3>
              </div>
              <address>
							  <strong>Beatus Ille Inc.</strong><br>
  							Somestreet KW 101, Park Village W.01<br>
  							Jakarta 13426 Indonesia
  						</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
         

            </div>
          </div>
          <div class="span4">
            <div class="widget">
             
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
               
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                -->
                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>

</html>
