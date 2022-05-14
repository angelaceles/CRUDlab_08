<?php 
    include ("seguridad2.php");
    include('header1.php');
    include("conexion1.php");
    $con=conectar();

    $sql="SELECT *  FROM tratados";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TRATADOS </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body background="img/vistatratado.png">
            <div class="container mt-5">


                        <div class="col-md-9">
                        <table class="table table-secondary table-striped" >
                                <thead class="table-dark table-striped" align="center">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Fecha</th>
                                        <th>Pais</th>
                                        <th>Relacion_Diplomatica</th>
                                       
                                        <th>Descripcion</th>

                                        
                                         
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


