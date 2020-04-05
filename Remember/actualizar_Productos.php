<?php
    include("abrir_conexion_Suscribirse.php");
    $Descripcion = $_GET['Descripcion'];
    $tabla_db = "productos";
    $campos = "*"; 

    $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db WHERE Descripcion='$Descripcion'");
    $consulta = mysqli_fetch_array($resultados)
?>
  

  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <center><h1>MODIFICAR</h1></center>
        <br>
        <center>
            <form method="POST" action="actualizar_proceso_Productos.php">


    <div class="form-group">
          <label for='Descripcion'>Descripcion</label>
          <input type="Text" name="txtDescripcion" class="form-control" id="Nombre" value="<?php echo $consulta['Descripcion'];?>">
    </div>

    <div class="form-group">
          <label for='Precio'>Precio</label>
          <input type="Text" name="txtPrecio" class="form-control" id="Precio" value="<?php echo $consulta['Precio'];?>">
    </div>

    <div class="form-group">
          <label for='Existencia'>Existencia</label>
          <input type="Text" name="txtExistencia" class="form-control" id="Precio" value="<?php echo $consulta['Existencia'];?>">
    </div>

    <div class="form-group">
          <label for='Imagen'>Imagen</label>
          <input type="Text" name="txtImagen" class="form-control" id="Precio" value="<?php echo $consulta['Imagen'];?>">
    </div>

    <button type="submit">Modificar</button>
      <a href="Tabla_Productos.php"><input type="button" value="regresar"> </a>
        <form>

    </center>
    </body>
</html>