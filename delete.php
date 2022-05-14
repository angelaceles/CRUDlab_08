<?php

include("conexion.php");
$con=conectar();

$cod_producto=$_GET['id'];

$sql="DELETE FROM producto  WHERE cod_producto='$cod_producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
