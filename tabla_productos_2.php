<?php 
   include("abrir_conexion_Suscribirse.php");
   
    
    session_start();



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
                      
                      <li class="dropwdown">
                      <a href="tabla_productos_2.php">Catalogo de productos</a>
                    </li>
                       
                      <?php 
                        if(isset($_SESSION['u_sesion'])){
                          if($_SESSION['u_rol']=="Comprador"){
                         ?>
                      <li class="dropdown">
                      <a href="tabla_compras.php"> Carro de Compras </i></a>
                      </li>
                  <?php 
                        }
                      }
                        ?>
                  
                  <?php 
                        if(isset($_SESSION['u_sesion'])){
                          if($_SESSION['u_rol']=="Vendedor"){
                         ?>
                      <li class="dropdown">
                      <a href="tabla_compastotales_ven.php"> Historial de ventas </i></a>
                      </li>
                  <?php 
                        }
                      }
                        ?>

                  <?php 
                        if(isset($_SESSION['u_sesion'])){
                          if($_SESSION['u_rol']=="Comprador"){
                         ?>
                      <li class="dropdown">
                      <a href="tabla_comprastotales.php"> Historial de compras </i></a>
                      </li>
                  <?php 
                        }
                      }
                        ?>

                      <?php 
                        if(isset($_SESSION['u_sesion'])){
                          if($_SESSION['u_rol']=="Administrador"){
                         ?>
                      <li class="dropdown">
                      <a href="vendedores_Admin.php"> Vendedores </i></a>
                      </li>
                  <?php 
                        }
                      }
                        ?>

                    
                    <?php 
                        if(isset($_SESSION['u_sesion'])){
                          if($_SESSION['u_rol']=="Administrador"){
                         ?>
                      <li class="dropdown">
                      <a href="compradores_admin.php"> Compradores </i></a>
                      </li>
                  <?php 
                        }
                      }
                        ?>
                  <?php 
                        if(isset($_SESSION['u_sesion'])){
                          if($_SESSION['u_rol']=="Administrador"){
                         ?>
                      <li class="dropdown">
                      <a href="compras_totales.php"> Compras Totales </i></a>
                      </li>
                  <?php 
                        }
                      }
                        ?>

                    
                   <?php 
                        if(isset($_SESSION['u_sesion'])){
                          if($_SESSION['u_rol']=="Vendedor"){
                         ?>
                      <li class="dropdown">
                      <a href="tabla_productos_3.php"> Articulos vendedor </i></a>
                      </li>
                  <?php 
                        }
                      }
                        ?>

                        
                      <?php 
                        if(!isset($_SESSION['u_sesion'])){
                         ?>
                         
                    <li class="dropdown">
                      <a href="#"> Opciones <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="Suscribirse.php">Suscribirse</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                    </li>
                    <?php 
                        }
                        ?>
            
                     
                     <?php 
                        if(!isset($_SESSION['u_sesion'])){
                         ?>
                    <li class="dropdown">
                      <a href="#"> Información <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="Acerca_de.php">Acerca de</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                    </li>
                    <?php 
                        }
                        ?>

                    

                    <ul class="nav topnav">
                    <li class="active">
                    </li>

                    <?php 
                        if(!isset($_SESSION['u_sesion'])){
                         ?>
                     <li class="dropdown">
                      <a class="dropwdown" href="Entrar.php"> Iniciar sesion</a>
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
                      </li>
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

          
          if(($_SESSION['u_rol']=="Vendedor")){
                         ?>
                        
      <a href="Formulario_productos.php"><Button>Insertar Producto</Button></a>
    <?php
    
  }}

  ?>
    </center>

    <br>
 
    <center>
      <table border="2">
    </center>
        <tr>
        <tr>
        <th width="10%">Codigo</th>
        <th width="10%">Descripción</th>
        <th width="5%">Precio</th>
        <th width="2%">Existencia</th>
        <th width="15%">Imagen</th>
        <th width="5%">Acciones</th>
        </tr>

        
      <?php
         $tabla_db = "productos";
         $campos = "*";
         $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db");
          while($consulta = mysqli_fetch_array($resultados))
      {?>


    <?php
        if ($consulta ['Existencia']>0){
    ?>
      <tr>
          <td><?php echo $consulta['Codigo'];?></td>
          <td><?php echo $consulta['Descripcion'];?></td>
          <td><?php echo $consulta ['Precio'];?></td>
          <td><?php echo $consulta ['Existencia'];?></td>
          <td><center><img src="<?php echo $consulta ['Imagen'];?>" alt="" class="img-rounded" width="120px"></center></td>
          <td>
             <center>
             <?php
                        if(isset($_SESSION['u_rol'])){
                          
                          if($_SESSION['u_rol']=="Vendedor"){
   
                   
                          
                          ?>


 


<?php  }else{?>
  <a href="proceso_compra.php?Codigo=<?php echo $consulta['Codigo'];?>&usuario=<?php echo  $_SESSION['u_sesion'];?>"><button>Comprar</button></a>
<?php

}
}                         ?>
             </center> 
         
    </td>
          
    </tr>
    <?php } ?>

    

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
