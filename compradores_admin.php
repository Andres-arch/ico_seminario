<?php
  include("abrir_conexion_Suscribirse.php");
  session_start();
  ?>
  <html>
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

      <title>Beatus Ille</title>
    </head>
    <body>
    <div id="wrapper">
    <!-- start header -->
    <header>

        <div class="container">
        
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
                  </ul>

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
              <h2>Compradores</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="tabla_productos_2.php">Regresar  </a> <i class="icon-angle-right"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    </nav>
                
                </div>
                <!-- end navigation -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- end header -->
  
     
  
      </div>
      </section>
  
              <div class="span6">
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                  -->
          
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
  
    <center>
    <?php 
            if(isset($_SESSION['u_rol'])){
  
            
            if(($_SESSION['u_rol']=="Administrador")){
                           ?>
                          
       
      <?php
      
    }}
  
    ?>
      </center>







    <br>
    <center>
      <table border="1">
        <tr>
        <tr>
          <th width="15%">Nombre</th>
          <th width="22%">Apellido</th>
          <th width="22%">Email</th>
          <th width="22%">Telefono</th>
          <th width="15%">Tipo de Usuario</th>
          <th width="15%">Contraseña</th>
        </tr>

        <?php
         $tabla_db = "registro";
         $campos = "*";
         $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db WHERE Tipo_usuario='Comprador'");
          while($consulta = mysqli_fetch_array($resultados))
        {?>

    <tr>
          <td><?php echo $consulta['Nombre'];?></td>
          <td><?php echo $consulta['Apellido'];?></td>
          <td><?php echo $consulta['mail'];?></td>
          <td><?php echo $consulta['Telefono'];?></td>
          <td><?php echo $consulta['Tipo_Usuario'];?></td>
          <td><?php echo $consulta['Pass'];?></td>
          <td>
              <a href="actualizar_Suscribirse.php?mail=<?php echo $consulta['mail'];?>"><Button>Actualizar</Button></a>
              <a href="eliminar_proceso_Suscribirse.php?mail=<?php echo $consulta['mail'];?>"><button>Eliminar</button></a>
          </td>
    </td>
    </tr>
       
    <?php
          }
          include("cerrar_conexion_Suscribirse.php");
        ?>
      </table>
    </center>
      
    

</body>
</html>