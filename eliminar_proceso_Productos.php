<?php
  include("abrir_conexion_Suscribirse.php");

  $Codigo = $_GET['Codigo'];
  if($Codigo==""){
    echo "<center><h3>Faltan campos por llenar</h3></center>";
}else{

    $tabla_db= 'productos';

    $sql = "DELETE FROM productos WHERE Codigo = '$Codigo'";
    $query = mysqli_query($conexion,$sql);

    if ($query) {
        header("location: tabla_productos_2.php");
    } else {
        echo "Lo sentimos, falló. Por favor, regrese y vuelva a intentarlo. <a href='tabla_productos_2.php'>Regresar</a>";
        }
      }
    ?>

}