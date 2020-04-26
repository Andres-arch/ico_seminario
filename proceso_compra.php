<?php
   session_start();
   include("abrir_conexion_Suscribirse.php");


    //obtenemos los datos

    
    $usuario = $_GET['usuario'];
    $cod_producto = $_GET['Codigo'];
    $Estatus = "Pendiente";

    echo $usuario;
    echo $cod_producto;
    echo $Estatus;

    if($usuario=="" || $cod_producto=="" || $Estatus==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        $tabla_db= 'compra';
        $sql = "INSERT INTO $tabla_db (ID_vendedor,Codigo_producto,Estatus) values
         ('$usuario','$cod_producto','$Estatus')";
         $query = mysqli_query($conexion,$sql);


         if ($query) {
             echo " La compra se ha realizado con éxito. <a href='tabla_compras.php'>Mostrar</a>";
         } else {
             echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='index.php'>Regresar</a>";
         }

   
        }
    ?>
