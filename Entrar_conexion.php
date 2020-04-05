<?php
    
    session_start();

    $Email= $_POST['txtmail'];
    $Contrasena = $_POST['txtPass'];

     include "abrir_conexion_Suscribirse.php";
     $proceso = $conexion->query("SELECT * FROM registro WHERE mail = '$Email' AND Pass = '$Contrasena'");
      
       if($resultado = mysqli_fetch_array($proceso)){
        $_SESSION['u_sesion'] = $Email;
        $_SESSION['u_nombre'] = $resultado['Nombre'];
        $_SESSION['u_rol'] = $resultado['Tipo_Usuario'];
        header("Location: tabla_productos_2.php");
    }else{
        header("Location: Entrar.php");
    }
?>


