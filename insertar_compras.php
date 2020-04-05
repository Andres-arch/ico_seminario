<?php
          session_start();
          include("abrir_conexion_Suscribirse.php");
          $Folio = $_POST['txtFolio'];
          $ID_vendedor = $_POST['txtID_vendedor'];
          $Producto_comprado = $_POST['Producto_comprado'];
          $Estatus = $_POST['Estatus'];

    if($Folio==""  || $ID_vendedor=="" || $Producto_comprado=="" || $Estatus==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        $tabla_db= 'compra';
        $sql = "INSERT INTO $tabla_db (Folio, ID_vendedor, Producto_comprado, Estatus) values
        ('$Folio','$ID_vendedor','$Producto_comprado','$Estatus')";

        $query = mysqli_query($conexion,$sql);
        if ($query) {
            echo "El dato ha sido guardado con éxito. <a href='index.php'>Regresar</a>";
    }else{
        echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='index.php'>Regresar</a>";
    }
   }
   ?>

