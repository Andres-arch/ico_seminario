<?php
  $host = "localhost";
  $basededatos = "registrarse";
  $usuariodb = "root";
  $clavedb = "";

  $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

  if ($conexion->connect_errno) {
    echo "Nuestro sitio experimenta fallos....";
    exit();
}

?>