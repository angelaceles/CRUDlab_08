<?php
include("conexion1.php");
?>
<link rel="stylesheet" href="css/admind.css">
<form  class="form-register" action="control.php" method="POST">
<tr>
    <td colspan="2" align="center">
       <?php if(isset($_GET["errorusuario"])=="si"){
           ?><span><b>Datos incorrectos</b></span>
       <?php } else{ ?><h4>Introduce tu clave de acceso</h4> 
       <?php } ?> 
    </td>
</tr>
<br>
<tr>
    <td align="center"><h2>Usuario:</h2> </td>
    <td><input type="email" name="correo" size="8" maxlength="50" placeholder="Ingrese su correo"></td>
</tr>
<br>
<tr>
    <td align="right"><h2>Clave:</h2> </td>
    <td><input type="password" name="contrasena" size="8" maxlength="50" placeholder="Ingrese su contraseña"></td>
</tr>
<br>
<tr>
    <td><input type="submit" value="INGRESAR"></td>
</tr>

</form>
<br>
<br>

<a href="registrar.php"><h2 >aún no tienes una cuenta?..Registrate aqui</h2></a>