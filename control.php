<?php
session_start();

include("db.php");

$consulta = $MySQLiconn->query("SELECT * FROM users_x WHERE  correo = '".$_POST["correo"]."'  AND contrasena =  '".$_POST["contrasena"]."' AND nivel = 1  "); 
$consulta2 = $MySQLiconn->query("SELECT * FROM users_x WHERE  correo = '".$_POST["correo"]."'  AND contrasena =  '".$_POST["contrasena"]."' AND nivel = 2  "); 

if(mysqli_num_rows($consulta)!=0){
    $_SESSION["autentificado"]="1";
    $_SESSION["user"]=$_POST["correo"];
    header("Location: aplicacion.php");
}

elseif (mysqli_num_rows($consulta2)!=0) {
    $_SESSION["autentificado"]="2";
    $_SESSION["user"]=$_POST["correo"];
    header("Location: aplicacion2.php");
}
else{
    header("Location: index.php?errorusuario=si");
}
?>