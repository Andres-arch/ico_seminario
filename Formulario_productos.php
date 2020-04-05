<!DOCTYPE html>
<html lang="en">

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

        <div class="container">
        
            <div class="span6">
            <ul class="topmenu">
  

              
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
              <h2>Formulario de Antiguedades</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="tabla_productos_2.php">Ver catalogo </a> <i class="icon-angle-right"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span4">

             <h4>Añadir Objeto</h4> 
                <br>
                <form method="POST" action="insertar_productos.php" enctype="multipart/form-data">    

              
                
                <div class="form-group">
                 <label for='Descripcion'>Descripción</label>
                  <textarea name="txtDescripcion" id="Descripcion" cols="40" rows="10"></textarea>

                   
                
                <div class="form-group">
                 <label for='Precio'>Precio</label>
                   <input type="Text" name="txtPrecio" class="form-control" id="Precio">
                      </div>

                <div class="form-group">
                  <label for='Existencia'>Existencia</label>
                   <input type="Text" name="txtExistencia" class="form-control" id="Existencia">
                      </div>

                <div class="form-group">
                  <label for='Imagen'>Imagen</label>
                    <input type="file" name="txtImagen" class="form-control" id="Imagen">
                      </div>

              <button type="submit">Subir objeto</button>
                <a href="index.php"> <input type="button" value="regresar"> 

            
        