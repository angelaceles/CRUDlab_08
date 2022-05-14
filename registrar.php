<?php
include_once 'reg.php';
include_once 'db.php';
?>
<link rel="stylesheet" href="css/usuario.css">
<form class="form-register" method="POST">
Registrate
<br>
<tr>
    <td align="center">Nombre: </td>
    <td><input type="text" name="nombre" size="8" maxlength="50" placeholder="Ingrese su nombre"></td>
</tr>
<br>
<tr>
    <td align="center">Apellido: </td>
    <td><input type="text" name="apellido" size="8" maxlength="50"placeholder="Ingrese su apellido"></td>
</tr>
<br>
<tr>
    <td align="center">DNI: </td>
    <td><input type="number" name="dni" size="8" maxlength="50"placeholder="Ingrese su dni"></td>
</tr>
<br>
<tr>
    <td align="center">Usuario: </td>
    <td><input type="email" name="correo" size="8" maxlength="50"placeholder="Ingrese su nombre correo"></td>
</tr>
<br>
<tr>
    <td align="right">Clave: </td>
    <td><input type="password" name="contrasena" size="8" maxlength="50"placeholder="Ingrese su contraseña"></td>
</tr>
<br>
<tr>
    <td><button type="submit" name="save">Registrar</button></td>
</tr>
</form>
<br>
<a href="index.php"><h1>Ingresa con tu cuenta</h1></a>