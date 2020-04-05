<?php
  include("abrir_conexion_Suscribirse.php");

  $Descripcion = $_GET['Descripcion'];
  if($Descripcion==""){
    echo "<center><h3>Faltan campos por llenar</h3></center>";
}else{

    $tabla_db= 'productos';

    $sql = "DELETE FROM productos WHERE Descripcion = '$Descripcion'";
    $query = mysqli_query($conexion,$sql);

    if ($query) {
        header("location: tabla_productos.php");
    } else {
        echo "Lo sentimos, falló. Por favor, regrese y vuelva a intentarlo. <a href='tabla_productos.php'>Regresar</a>";
        }
      }
    ?>

}