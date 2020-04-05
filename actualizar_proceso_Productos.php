<?php
  include("abrir_conexion_Suscribirse.php");
  $Codigo=$_POST['txtCodigo'];
  $Descripcion = $_POST['txtDescripcion'];
  $Precio = $_POST['txtPrecio'];
  $Existencia = $_POST['txtExistencia'];
 

  if($Codigo=="" || $Descripcion=="" || $Precio=="" || $Existencia=="" ){
    echo "<center><h3>Faltan campos por llenar</h3></center>";
  }else{
    $tabla_db= 'productos';
     
    $sql = "UPDATE $tabla_db SET Codigo='$Codigo', Descripcion='$Descripcion', Precio='$Precio', Existencia='$Existencia' where Codigo='$Codigo'";
    $query = mysqli_query($conexion,$sql);

    if ($query) {
        echo "El dato ha sido modificado con éxito. <a href='tabla_productos_2.php'>Regresar</a>";
    } else {
        echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='Tabla_productos.php'>Regresar</a>";
    }
  }
   ?>