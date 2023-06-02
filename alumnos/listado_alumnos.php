
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
                    <h2 class="fw-bolder">Alumnos <span class="badge text-bg-secondary shadow"><?php
                                  require("../config/conexion.php");
                                  $sql = "SELECT COUNT(idusuario)
                                  FROM usuario";
                                  $res = $conexion->query($sql);
                                  $count = $res->fetchColumn();
                                  print $count ." <i> Registrados </i>";
                                ?></span></h2>
                    <hr>
                        <!---busqueda e filtros-->
                        <div class="d-flex mb-3">
                            <div class="input-group">
                                <form class="p-2 flex-shrink-1" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-filter"></i> Filtrar
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
                                <a href="/inventario/alumnos/registrar_alumno.php" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i> Agregar alumno</a>  
                            </div>                  
                        </div>           
            <!--tabla-->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">RUT</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Cohorte</th>
                        <th scope="col">Año ingreso</th>
                        <th scope="col">Fecha de Nacimiento</th>
                    </tr>
                </thead>
                <tbody>
                <tbody class="table-group-divider">
                    <?php
                    require("../config/conexion.php");
                    $datos = $conexion->prepare("SELECT * FROM usuario");
                    $datos->setFetchMode(PDO::FETCH_ASSOC);
                    $datos->execute();
                    while($row = $datos->fetch()){
                         
                        
                    ?>    
                    <tr>
                        <th scope="col"> <?php echo $row ['rut']?></th>
                        <td> <?php echo $row ['nombre']?></td>
                        <td> <?php echo $row ['apellido']?></td>
                        <td> <?php echo $row ['carrera']?></td>
                        <td> <?php echo $row ['cohorte']?></td>
                        <td> <?php echo $row ['anoingreso']?></td>
                        <td> <?php echo $row ['fecha_nacimiento']?></td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    <!--final de tabla-->
        </div>
    </div>

</body>
</html>