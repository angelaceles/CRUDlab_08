<?php 
    include ("seguridad2.php");
    include('header.php');
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM producto";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PRODUCTOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body background="img/vistaproducto.png">
            <div class="container mt-3" align="center">
                    <div class="row"> 
                        
                       

                    <div class="col-md-9">
                            <table class="table table-secondary table-striped" >
                                <thead class="table-dark table-striped" align="center">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Pais Destinatario</th>
                                        <th>Relacion Diplomatica</th>
                                        <th>Producto</th>
                                        <th>Descripcion producto</th>
                                        <th>Transporte</th>
                                        <th>Peso</th>
                                        <th>Fecha</th>
                                         
                                </thead>
                        <br>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_producto']?></th>
                                                <th><?php  echo $row['pais_destinatario']?></th>
                                                <th><?php  echo $row['relacion_diplomatica']?></th>
                                                <th><?php  echo $row['producto']?></th>
                                                <th><?php  echo $row['descripcion_producto']?></th> 
                                                <th><?php  echo $row['transporte']?></th>
                                                <th><?php  echo $row['peso']?></th>
                                                <th><?php  echo $row['fecha']?></th>
    
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                      
                        </div>
                    </div>  
            </div>
    </body>
</html>


