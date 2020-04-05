<?php
          include("abrir_conexion_Suscribirse.php");
           $Nombre = $_POST['txtNombre'];
           $Apellido = $_POST['txtApellido'];
           $Email = $_POST['txtEmail'];
           $Telefono = $_POST['txtTelefono'];
           $Tipo_de_Usuario = $_POST['txtTipo_Usuario'];
           $Tipo_de_Suscripcion = $_POST['txtTipo_suscripcion'];
           $Contrasena = $_POST['txtPass'];

    if($Nombre=="" || $Apellido=="" || $Email=="" || $Telefono=="" || $Tipo_de_Usuario=="" || $Tipo_de_Suscripcion=="" || $Contrasena==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        $tabla_db= 'registro';
        $sql = "INSERT INTO $tabla_db (Nombre, Apellido, mail, Telefono, Tipo_Usuario, Tipo_Suscripcion, Pass) values 
        ('$Nombre','$Apellido','$Email', '$Telefono', '$Tipo_de_Usuario', '$Tipo_de_Suscripcion', '$Contrasena')";

$query = mysqli_query($conexion,$sql);
if ($query) {
    echo "El dato ha sido guardado con éxito. <a href='index.php'>Regresar</a>";
} else {
    echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='index.php'>Regresar</a>";
}

}
?>
 