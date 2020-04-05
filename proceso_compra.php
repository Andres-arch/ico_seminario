<?php
   session_start();
   include("abrir_conexion_Suscribirse.php");


    //obtenemos los datos

    $cod_producto = $_GET['Codigo'];
    $usuario = $_GET['usuario'];
    
    echo $cod_producto;
    echo $usuario;


?>