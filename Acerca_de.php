<?php 
   include("abrir_conexion_Suscribirse.php");
   
    
    session_start();



  ?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <title>Remember - Multipurpose bootstrap site template</title>
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
                        
                        <li><a href="Entrar.php">Iniciar sesion</a></li>
                        
                      

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
                        if(isset($_SESSION['u_sesion'])){
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

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>¿Quienes somos?</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">

 
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">


            <h5>Somos una casa de empeño centrada en las antiguedades que busca desarrollarse como un centro
              de intercambio para todos nuestros usuarios, dandole el valor que sus productos merecen. Permitiendole a nuestros compradores que 
              obtengan antiguedades y productos de gran valor histórico, simbólico o de alguna otra índole. 
            </h5>
          </div>


              </div>
            </div>
          </div>
          <div class="span3">

              </div>
            </div>
          </div>

               
              </div>
            </div>
          </div>
          <div class="span3">
           
            <div class="span6">
             
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

</php>
