<?php

    session_start();
     include("abrir_conexion_Suscribirse.php");
     if (isset($_GET['compra'])){
      $compra = $_GET['compra'];
      $tabla_db= 'compra';

    $sql = "UPDATE $tabla_db SET Estatus='Comprado' inner join='productos' WHERE ID_vendedor= '$compra'";
    $query = mysqli_query($conexion,$sql);

    if ($query) {
        echo "Compra exitosa. <a href='tabla_compras.php'>Regresar</a>";
    } else {
        echo "Lo sentimos su compra no fue comnpletada, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='tabla_compras.php'>Regresar</a>";
    }
    //------------------------------------------------
     }
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
                    
                    <li class="dropwdown">
                      <a href="tabla_productos_2.php">Catalogo de productos</a>
                    </li>
                    <li class="dropdown">
                      <a href="tabla_compras.php"> Carro de Compras </i></a>
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
                      <a class="dropwdown" href="#Entrar"> Iniciar Sesion</a>
                     </li>
                    <?php } else{?>
                      <li class="dropdown" href="#Entrar"> <a class="dropwdown" href="#Entrar"><?php  echo $_SESSION['u_nombre']; ?> </a>
                      </li>
                       <?php }?>


                     
                      <li class="dropdown">
                      <a href="Cerrar_sesion.php"> Salir </i></a>
                      
                        
                      
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

  <br>
    <center>
        <h4>Total de Antiguedades Compradas</h4>
    </center>


    <center>
        <table border="2">
    </center>
     <tr>
      <tr>
      <th width="10%">Folio de compra</th>
      <th width="10%">Descripcion</th>
      <th width="10%">Precio</th>
      <th width="10%">Imagen</th>
      <th width="10%">Estatus</th>
      </tr>
      
      
      <?php
         $tabla_db = "compra";
         $campos = "*";
         $usuario=$_SESSION['u_sesion'];
         $resultados = mysqli_query($conexion,"SELECT Codigo,Descripcion, Precio, Imagen FROM compra INNER JOIN productos ON compra.Codigo_producto= productos.Codigo WHERE compra.ID_vendedor='$usuario' and compra.Estatus='Comprado'");
          while($consulta = mysqli_fetch_array($resultados))
      {?>
     
      

        <tr>
         <td><?php echo $consulta['Codigo'];?></td>
          <td><?php echo $consulta['Descripcion'];?></td>
          <td><?php echo $consulta ['Precio'];?></td>
          <td><center><img src="<?php echo $consulta ['Imagen'];?>" alt="" width="100px"></center></td>
         <td> Comprado </td>
               
         </tr>

        
     
         
     
         <?php
                 }
                 include("cerrar_conexion_Suscribirse.php");
                ?>
             </table>
                  </center>
           
         </body>
     </html>
     
          
     
     </body>
     
     </html>