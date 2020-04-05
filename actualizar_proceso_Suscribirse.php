<?php
  include("abrir_conexion_Suscribirse.php");
   
   $Nombre = $_POST['txtNombre'];
   $Apellido = $_POST['txtApellido'];
   $Email = $_POST['txtmail'];
   $Telefono = $_POST['txtTelefono'];
   $Tipo_de_Usuario = $_POST['txtTipo_Usuario'];
   $Contrasena = $_POST['txtPass'];
   

if($Nombre=="" || $Apellido=="" || $Email=="" || $Telefono=="" || $Tipo_de_Usuario=="" || $Contrasena==""){
    echo "<center><h3>Faltan campos por llenar</h3></center>";
   }else{

    $tabla_db= 'registro';

    $sql = "UPDATE $tabla_db SET Nombre='$Nombre', Apellido='$Apellido', Telefono='$Telefono', Tipo_Usuario='$Tipo_de_Usuario', Pass='$Contrasena'  WHERE mail= '$Email'";
    $query = mysqli_query($conexion,$sql);

    if ($query) {
        echo "El dato ha sido modificado con éxito. <a href='Tabla_Suscribirse.php'>Regresar</a>";
    } else {
        echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='Tabla_Suscribirse.php'>Regresar</a>";
    }
    //------------------------------------------------
}
?>
