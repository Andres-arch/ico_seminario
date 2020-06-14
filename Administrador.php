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
                      <a href="vendedores_Admin.php"> Vendedores </i></a>
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
                      <a href=""> Compradores </i></a>
                      </li>
                  <?php 
                        }
                      }
                        ?>
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