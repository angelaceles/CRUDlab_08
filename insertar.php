<?php
include("conexion.php");
$con=conectar();

$cod_producto=$_POST['cod_producto'];
$pais_destinatorio=$_POST['pais_destinatario'];
$relacion_diplomatica=$_POST['relacion_diplomatica'];
$producto=$_POST['producto'];
$descripcion_producto=$_POST['descripcion_producto'];
$transporte=$_POST['transporte'];
$peso=$_POST['peso'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO producto VALUES('$cod_producto','$pais_destinatorio','$relacion_diplomatica','$producto','$descripcion_producto','$transporte','$peso','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>