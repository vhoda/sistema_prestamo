<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listado Prestamos</title>
</head>
<body>
<?php 
include'../menu.php'
?>
<div class="col py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                    <h2 class="fw-bolder">Prestamos <span class="badge text-bg-secondary shadow"><?php
                                  require("../config/conexion.php");
                                  $sql = "SELECT COUNT(idprestamo)
                                  FROM prestamo";
                                  $res = $conexion->query($sql);
                                  $count = $res->fetchColumn();
                                  print $count ." <i> Registrados </i>";
                                ?></span></h2>
                    <hr>
                        <!---busqueda-->
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
                                <a href="/inventario/prestamos/consulta.php" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i> Agregar prestamo</a>  
                            </div>                  
                        </div>            
            <!--tabla-->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">N° Prestamo</th>
                        <th scope="col">RUT</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos </th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Fecha Prestamo</th>
                        <th scope="col">Fecha Aproximada</th>
                        <th scope="col">SKU Equipo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">tipo</th>
                    </tr>
                </thead>
                <tbody>
                <tbody class="table-group-divider">
                    <?php
                    require("../config/conexion.php");
                    //unificar datos con usuario
                    
                    $datos = $conexion->prepare("SELECT prestamo.idprestamo,
                    usuario.rut,
                    usuario.nombre,
                    usuario.apellido,
                    usuario.carrera,
                    prestamo.fecha_prestamo,
                    prestamo.fecha_aprox,
                    productos.idproductos,
                    productos.marca,
                    productos.modelo,
                    productos.tipo
                    FROM usuario, productos, prestamo
                    WHERE
                    usuario.idusuario=prestamo.idusuario
                    AND
                    prestamo.idproductos=productos.idproductos ORDER BY prestamo . idprestamo DESC");
                    $datos->setFetchMode(PDO::FETCH_ASSOC);
                    $datos->execute();
                    while($row = $datos->fetch()){
                    ?>    
                    <tr>
                    <td> <?php echo $row ['idprestamo']?></td>
                        <td> <?php echo $row ['rut']?></td>
                        <td> <?php echo $row ['nombre']?></td>
                        <td> <?php echo $row ['apellido']?></td>
                        <td> <?php echo $row ['carrera']?></td>
                        <td> <?php echo $row ['fecha_prestamo']?></td>
                        <td> <?php echo $row ['fecha_aprox']?></td>
                        <td> <?php echo $row ['idproductos']?></td>
                        <td> <?php echo $row ['marca']?></td>
                        <td> <?php echo $row ['modelo']?></td>
                        <td> <?php echo $row ['tipo']?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    <!--final de tabla-->
        </div>
    </div>

</body>
</html>