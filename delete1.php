<?php

include("conexion1.php");
$con=conectar();

$cod_P=$_GET['id'];

$sql="DELETE FROM tratados WHERE cod_P='$cod_P'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno1.php");
    }
?>
