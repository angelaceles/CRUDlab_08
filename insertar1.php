<?php
include("conexion1.php");
$con=conectar();

$cod_P=$_POST['cod_P'];
$Fecha=$_POST['Fecha'];
$Pais=$_POST['Pais'];
$Relacion_Diplomatica=$_POST['Relacion_Diplomatica'];
$Descripcion=$_POST['Descripcion'];

$sql="INSERT INTO tratados VALUES('$cod_P','$Fecha','$Pais','$Relacion_Diplomatica','$Descripcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno1.php");
    
}else {
}
?>