<?php

include("conexion.php");
$con=conectar();

$cod_producto=$_POST['cod_producto'];
$pais_destinatario=$_POST['pais_destinatario'];
$relacion_diplomatica=$_POST['relacion_diplomatica'];
$producto=$_POST['producto'];
$descripcion_producto=$_POST['descripcion_producto'];
$transporte=$_POST['transporte'];
$peso=$_POST['peso'];
$fecha=$_POST['fecha'];

$sql="UPDATE producto SET  pais_destinatario='$pais_destinatario',relacion_diplomatica='$relacion_diplomatica',producto='$producto',descripcion_producto='$descripcion_producto',transporte='$transporte',peso='$peso' ,fecha='$fecha' WHERE cod_producto='$cod_producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>