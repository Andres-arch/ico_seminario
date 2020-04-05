<?php
    
    session_start();

    $Email= $_POST['txtmail'];
    $Contrasena = $_POST['txtPass'];

     include "abrir_conexion_Suscribirse.php";
     $proceso = $conexion->query("SELECT * FROM registro WHERE mail = '$Email' AND Pass = '$Contrasena'");
      
       if($resultado = mysqli_fetch_array($proceso)){
        $_SESSION['u_sesion'] = $Email;
        header("Location: tabla_productos.php");
    }else{
        header("Location: Entrar.php");
    }
?>


