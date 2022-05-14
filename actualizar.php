<?php 
    
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM producto WHERE cod_producto='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_producto" value="<?php echo $row['cod_producto']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="pais_destinatario" placeholder="Pais_destinatario" value="<?php echo $row['pais_destinatario']  ?>">

                                <input type="text" class="form-control mb-3" name="relacion_diplomatica" placeholder="Relacion_diplomatica" value="<?php echo $row['relacion_diplomatica']  ?>">

                                <input type="text" class="form-control mb-3" name="producto" placeholder="Producto" value="<?php echo $row['producto']  ?>">

                                <input type="text" class="form-control mb-3" name="descripcion_producto" placeholder="Descripcion_producto" value="<?php echo $row['descripcion_producto']  ?>">

                                <input type="text" class="form-control mb-3" name="transporte" placeholder="Transporte" value="<?php echo $row['transporte']  ?>">

                                <input type="text" class="form-control mb-3" name="peso" placeholder="Peso" value="<?php echo $row['peso']  ?>">

                                <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']  ?>">


                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>