<?php 
include ("seguridad.php");
?>
<html>
<head>
    <title>App segura</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION["user"];?></h1>
    <br>
    -----
    <br>
    Usuario: <?php echo $_SESSION["user"];?>
    <br>
    -----
    <br><br>
    <section class="container">
        <a href="alumno1.php" target="click" onclick="return confirm('Seguro que desea viajar a los tratados')"alt="">
            <img src="img/tratado.jpg" alt="un tratado">
            <p>TRATADO</p>
        </a>
    </section>
    <section class="container">
        <a href="alumno.php" target="click" onclick="return confirm('Seguro que desea viajar a los productos')"alt="">
            <img src="img/agreement.jpg" alt="un producto">
            <P>PRODUCTO</P>
        </a>
    </section>
<body>


</body>
</html>