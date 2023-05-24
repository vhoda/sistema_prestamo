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
                    <h2 class="fw-bolder">Prestamos - Listado Prestamos</h2>
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
                                <a href="/inventario/prestamos/consulta.php" class="btn btn-success">Agregar prestamo</a>  
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
                        <th scope="col">Fecha_Prestamo</th>
                        <th scope="col">SKU Equipo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require("../config/conexion.php");
                    //unificar datos con usuario
                    $datos = $conexion->prepare("SELECT 
                    prestamo.idprestamo,
                    usuario.rut,
                    usuario.nombre, 
                    usuario.apellido, 
                    usuario.carrera,
                    prestamo.fecha_entrega,
                    producto.idproducto, 
                    producto.marca,
                    producto.modelo
                    FROM usuario, producto, prestamo, bodega,perfil
                    WHERE
                    perfil.idperfil=usuario.idperfil
                    AND
                    usuario.idusuario=prestamo.idusuario
                    and
                    prestamo.idproducto=producto.idproducto");
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
                        <td> <?php echo $row ['fecha_entrega']?></td>
                        <td> <?php echo $row ['idproducto']?></td>
                        <td> <?php echo $row ['marca']?></td>
                        <td> <?php echo $row ['modelo']?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    <!--final de tabla-->
        </div>
    </div>

</body>
</html>