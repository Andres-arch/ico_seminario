<?php
     include("abrir_conexion_Suscribirse.php");
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
              <h2>Canasta de compras</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php">Regresar a Inicio </a> <i class="icon-angle-right"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </section>



    <table border="1">
        <tr>
          <th width="10%">Folio</th>
          <th width="10%">ID del comprador</th>
          <th width="10%">ID del vendedor</th>
          <th width="10%">Producto comprado</th>
          <th width="10%">Metodo de compra</th>
          <th width="10%">Estatus</th>
          
        </tr>

        <?php
         $tabla_db = "compra";
         $campos = "*";
         $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db");
          while($consulta = mysqli_fetch_array($resultados))
        {?>

         <tr>
          <td><?php echo $consulta['Folio'];?></td>
          <td><?php echo $consulta['ID_comprador'];?></td>
          <td><?php echo $consulta['ID_vendedor'];?></td>
          <td><?php echo $consulta['Productos_comprados'];?></td>
          <td><?php echo $consulta['Metodos_compra'];?></td>
          <td><?php echo $consulta['Estatus'];?></td>

        </tr>
           

        <?php
          }
          include("cerrar_conexion_Suscribirse.php");
        ?>
      </table>
    
      
    

</body>
</html>