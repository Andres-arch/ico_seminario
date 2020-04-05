<?php
  include("abrir_conexion_Suscribirse.php");
  $Codigo=$_POST['txTCodigo'];
  $Folio=$_POST['txtFolio'];
  $ID_vendedor=$_POST['txtID_vendedor'];
  $Productos_comprado=$_POST['txtProducto_comprado'];
  $Estatus=$_POST['txtEstatus'];

  if($Codigo=="" || Folio=="" ||  $ID_vendedor=="" ||  $Metodos_compra=="" || $Estatus==""){
    echo "<center><h3>Faltan campos por llenar</h3></center>";
  }else{
    $tabla_db= 'compra';

    $sql = "UPDATE $tabla_db SET Codigo='$Codigo', Folio='$Folio', ID_vendedor='$ID_vendedor', Productos_comprado='$Productos_comprado', Estatus='$Estatus'";
    $query = mysqli_query($conexion,$sql);

    if ($query) {
        echo "El dato ha sido modificado con éxito. <a href='Tabla_compras.php'>Regresar</a>";
    } else {
        echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='Tabla_compras.php'>Regresar</a>";
    }
  }
   ?>
 