<?php
include_once 'db.php';
include_once 'registrar.php';
if(isset($_POST['save']))
{
    $nombre = $MySQLiconn->real_escape_string($_POST["nombre"]);
    $apellido = $MySQLiconn->real_escape_string($_POST["apellido"]);
    $dni = $MySQLiconn->real_escape_string($_POST["dni"]);
    $correo = $MySQLiconn->real_escape_string($_POST['correo']);
    $contrasena = $MySQLiconn->real_escape_string($_POST['contrasena']);
    

    $SQL = $MySQLiconn->query("INSERT INTO users_x ( nombre, apellido, dni, correo, contrasena) VALUES( 
    '$nombre', '$apellido', '$dni', '$correo', '$contrasena')");
    if (!$SQL)
    {
        echo $MySQLiconn->error;
    }
}