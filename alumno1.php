<?php 
    include ("seguridad.php");
    include('header1.php');
    include("conexion1.php");
    $con=conectar();

    $sql="SELECT *  FROM tratados ";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TRATADOS </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body background="img/escritorio.jpg">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 align="center">INGRESE NUEVO TRATADO</h1>
                            <br>
                                <form action="insertar1.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_P" placeholder="cod_P">
                                    <input _ngcontent-oxu-c35 type="date" formcontrolname="date" class="form-control mb-3 ng-touched ng-dirty is-valid ng-valid" name="Fecha" placeholder="Fecha">
                                    <input type="text" class="form-control mb-3" name="Pais" placeholder="Pais">
                                    <input type="text" class="form-control mb-3" name="Relacion_Diplomatica" placeholder="Relacion_Diplomatica">
                                    <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input type="submit" class="btn btn-warning"target="click" onclick="return confirm('Usted agregara este nuevo dato recuerde respetar el orden del ID')"alt="">
                                </div>
                                </form>
                        </div>

                        <div class="col-md-9">
                            <table class="table table-secondary table-striped" >
                                <thead class="table-dark table-striped" align="center">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Fecha</th>
                                        <th>Pais</th>
                                        <th>Relacion_Diplomatica</th>
                                       
                                        <th>Descripcion</th>

                                        <th>Editar libro</th>
                                        <th>Borrar libro</th>
                                         
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr align="center">
                                                <th><?php  echo $row['cod_P']?></th>
                                                <th><?php  echo $row['Fecha']?></th>
                                                <th><?php  echo $row['Pais']?></th>
                                                <th><?php  echo $row['Relacion_Diplomatica']?></th>
                                                <th><?php  echo $row['Descripcion']?></th> 
                                                
                                                <th><a href="actualizar1.php?id=<?php echo $row['cod_P'] ?>" class="btn btn-dark" target="click" onclick="return confirm('Seguro que desea editar')"alt="">Editar</a></th>
                                                
                                                <th><a href="delete1.php?id=<?php echo $row['cod_P'] ?>" class="btn btn-danger"target="click" onclick="return confirm('Seguro que desea eliminar no abra vuelta atras :(')"alt="">Eliminar</a></th>                                        
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


