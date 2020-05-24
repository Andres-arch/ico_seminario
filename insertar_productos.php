<?php 
  session_start();
  include("abrir_conexion_Suscribirse.php");
  $Descripcion = $_POST['txtDescripcion'];
  $Precio = $_POST['txtPrecio'];
  $Existencia = $_POST['txtExistencia'];
  $img=$_FILES["txtImagen"]["name"];
  $ruta=$_FILES["txtImagen"]["tmp_name"];
  $destino="img/".$img;
  copy($ruta,$destino);
  $Vendedor = $_SESSION['u_sesion'];

  if($Descripcion=="" || $Precio=="" || $Existencia=="" ){
      echo "<center><h3>Faltan campos por llenar</h3></center>";    
  }else{
    $tabla_db= 'productos';
    $sql = "INSERT INTO $tabla_db (Descripcion, Precio, Existencia, Imagen,Vendedor) values
    ('$Descripcion', '$Precio', '$Existencia', '$destino','$Vendedor')";
  }

  $query = mysqli_query($conexion,$sql);
   if ($query) {
      echo "El objeto ha sido guardado con éxito. <a href='index.php'>Regresar</a>";
  } else {
    echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='index.php'>Regresar</a>";
   }


?>