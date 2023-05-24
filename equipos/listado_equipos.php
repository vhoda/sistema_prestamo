<!DOCTYPE html>
<html lang="en">
<head>

    <title>Listado alumnos</title>
</head>
<body>
<?php 
include'../menu.php'
?>
<div class="col py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                    <h2 class="fw-bolder">Equipos</h2>
                    <hr>
                        <!---busqueda-->
                        <div class="d-flex mb-3">
                            <div class="input-group">
                                <form class="p-2 flex-shrink-1" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Filtrar
                                </button>
                                <!--dropdown filtrar-->
                                <div>
                                    <ul class="dropdown-menu dropdown-menu-end shadow">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a href="/inventario/equipos/registrar_equipo.php" class="btn btn-success">Agregar equipo</a>  
                            </div>                  
                        </div>                
            <!--tabla-->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">SKU</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require("../config/conexion.php");
                    $datos = $conexion->prepare("SELECT * FROM producto");
                    $datos->setFetchMode(PDO::FETCH_ASSOC);
                    $datos->execute();
                    while($row = $datos->fetch()){
                         
                        
                    ?>    
                    <tr>
                        <td> <?php echo $row ['idproducto']?></td>
                        <td> <?php echo $row ['marca']?></td>
                        <td> <?php echo $row ['modelo']?></td>
                        <td> <?php echo $row ['tipo']?></td>
                        <td> <?php echo $row ['estado']?></td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    <!--final de tabla-->
        </div>
    </div>

</body>
</html>