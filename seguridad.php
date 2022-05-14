<?php
//Inicio la sesión
session_start();

//Comprueba que el usuario esta autentificado
if($_SESSION["autentificado"]!="1"){
    if($_SESSION["autentificado"]="2"){
        header("Location: aplicacion2.php");
    }
    else{
        //si no existe, se dirige a la página de inicio
        header("Location: index.php");
    }

    //salimos del script
    exit();
}
?>