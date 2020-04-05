<?php
    include("abrir_conexion_Suscribirse.php");
    $Email = $_GET['mail'];
    $tabla_db = "registro";
    $campos = "*"; 

    $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db WHERE mail='$Email'");
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
        <center><h1>ACTUALIZAR</h1></center>
        <br>
        <center>
            <form method="POST" action="actualizar_proceso_Suscribirse.php" >


            <div class="form-group">
      <label for='Nombre'>Nombre</label>
        <input type="Text" name="txtNombre" class="form-control" id="Nombre" value="<?php echo $consulta['Nombre'];?>">
        </div>
  <div class="form-group">
    <label for='Apellido'>Apellido</label>
      <input type="Text" name="txtApellido" class="form-control" id="apellido" value="<?php echo $consulta['Apellido'];?>">
      </div>
   <div class="form-group">
      <label for='mail'>Email</label>
       <input  type="Text" name="txtmail" class="form-control" id="Email" value="<?php echo $consulta['mail'];?>" readonly="readonly">
        </div>

   <div class="form-group">
     <label for='Telefono'>Telefono</label>
       <input type="int" name="txtTelefono" class="form-control" id="Telefono" value="<?php echo $consulta['Telefono'];?>">
       </div>

   <div class="form-group">
    <label for='Tipo_Usuario'>Tipo de Usuario</label>
      <input list="TU" name="txtTipo_Usuario" class="form-contol" id="usuario" value="<?php echo $consulta['Tipo_Usuario'];?>">
      <datalist id="TU">
      <option label="Vendedor" value="Vendedor">
      <option label="Comprador" value="Comprador">
      </datalist>
     </div>
  <div class="form-group">
     <label for='Pass'>Contraseña</label>
       <input type="password" name="txtPass" class="form-control" id="Contrasena" value="<?php echo $consulta['Pass'];?>">
       </div>

   <button type="submit">Actualizar</button>
      <a href="Tabla_Suscribirse.php"><input type="button" value="regresar"> </a>
        <form>

      </center>
    </body>
</html>