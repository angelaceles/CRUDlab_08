<?php

include("conexion1.php");
$con=conectar();

$cod_P=$_POST['cod_P'];
$Fecha=$_POST['Fecha'];
$Pais=$_POST['Pais'];
$Relacion_Diplomatica=$_POST['Relacion_Diplomatica'];
$Descripcion=$_POST['Descripcion'];

$sql="UPDATE tratados SET  Fecha='$Fecha',Pais='$Pais',Relacion_Diplomatica='$Relacion_Diplomatica',Descripcion='$Descripcion' WHERE cod_P='$cod_P'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno1.php");
    }
?>