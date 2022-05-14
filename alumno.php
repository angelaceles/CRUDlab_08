<?php 
    include ("seguridad.php");
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
        <link href="" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body background="img/exportacion.jpg">
    <div class="container mt-3">
                    <div class="row"> 
                        
                        <div class="col-md-2" >
                            <h1 align="center">INGRESE NUEVO PRODUCTO</h1>
                            <br>
                                <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="cod_producto" placeholder="Cod_producto">
                    <input type="text" class="form-control mb-3" name="pais_destinatario" placeholder="Pais_destinatario">
                    <input type="text" class="form-control mb-3" name="relacion_diplomatica" placeholder="Relacion_diplomatica">
                    <input type="text" class="form-control mb-3" name="producto" placeholder="Producto">
                    <input type="text" class="form-control mb-3" name="descripcion_producto" placeholder="Descripcion_producto">
                    <input type="text" class="form-control mb-3" name="transporte" placeholder="Transporte">
                    <input type="text" class="form-control mb-3" name="peso" placeholder="Peso">
                    <input _ngcontent-oxu-c35 type="date" formcontrolname="date" class="form-control  ng-touched ng-dirty is-valid ng-valid" name="fecha" placeholder="Fecha">
                    <br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" class="btn btn-primary"target="click" onclick="return confirm('Usted agregara este nuevo dato recuerde respetar el orden del ID')"alt="">
                    </div>
                   
                                </form>
                        </div>

                        <div class="col-md-10">
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
                                       <th>Editar producto</th>
                                        <th>Borrar producto</th>
                         
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr align="center">
                                                <th><?php  echo $row['cod_producto']?></th>
                                                <th><?php  echo $row['pais_destinatario']?></th>
                                                <th><?php  echo $row['relacion_diplomatica']?></th>
                                                <th><?php  echo $row['producto']?></th>
                                                <th><?php  echo $row['descripcion_producto']?></th> 
                                                <th><?php  echo $row['transporte']?></th>
                                                <th><?php  echo $row['peso']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                
                                              
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_producto'] ?>" class="btn btn-info" target="click" onclick="return confirm('Seguro que desea editar')"alt="">Editar</a></th>
                                                
                                                <th><a href="delete.php?id=<?php echo $row['cod_producto'] ?>" class="btn btn-danger"target="click" onclick="return confirm('Seguro que desea eliminar no abra vuelta atras :(')"alt="">Eliminar</a></th>                                        
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


