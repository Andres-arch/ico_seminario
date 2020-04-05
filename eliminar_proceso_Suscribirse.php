<?php
  include("abrir_conexion_Suscribirse.php");

  $Email = $_GET['mail'];
  if($Email==""){
    echo "<center><h3>Faltan campos por llenar</h3></center>";
}else{

    $tabla_db= 'registro';

    $sql = "DELETE FROM registro WHERE mail = '$Email'";
    $query = mysqli_query($conexion,$sql);

 if ($query) {
    header("location: tabla_Suscribirse.php");
} else {
    echo "Lo sentimos, falló. Por favor, regrese y vuelva a intentarlo. <a href='tabla_Suscribirse.php'>Regresar</a>";
    }
  }
?>

