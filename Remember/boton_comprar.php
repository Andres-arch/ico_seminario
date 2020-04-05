<?php
    include("abrir_conexion_Suscribirse.php");
    $ID_vendedor = $_GET['ID_vendedor'];
    $tabla_db = "compra";
    $campos = "*"; 

    $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db WHERE ID_vendedor='$ID_vendedor'");
    session_start();
    

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
        
        <br>
        <center>
            <form method="POST" action="boton_proceso_comprar.php">
            <center><h1>COMPRAR</h1></center>

        <div class="form-group">
          <label for='Folio'>Folio</label>
          <input type="Text" name="txtFolio" class="form-control" id="Nombre" value="<?php echo $consulta['Folio'];?>">
       </div>
     

       <div class="form-group">
          <label for='ID_vendedor'>E-mail del vendedor</label>
          <input type="Text" name="txtID_vendedor" class="form-control" id="Nombre" value="<?php echo $consulta['ID_vendedor'];?>">
       </div>

       <div class="form-group">
          <label for='Producto_comprado'>Producto comprado</label>
          <input type="Text" name="txtProducto_comprado" class="form-control" id="Nombre" value="<?php echo $consulta['Producto_comprado'];?>">
       </div>

       <div class="form-group">
          <label for='Estatus'>Estatus</label>
          <input type="Text" name="txtEstatus" class="form-control" id="Nombre" value="<?php echo $consulta['Estatus'];?>">
       </div>

       <button type="submit">Comprar</button>
      <a href="Tabla_comprar.php"><input type="button" value="regresar"> </a>
        <form>

       </center>
    </body>
</html>