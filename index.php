<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
</head>
<body>
<?php 
include"menu.php"
?>
<div class="col py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                    <h2 class="fw-bolder">Inicio</h2>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 mb-3 mb-sm-0">
                          <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="/inventario/equipos/listado_equipos.php" class="card-title fs-2 fw-bold">Equipos Registrados</a>
                                <br>
                                <br>
                                <?php
                                  require("config/conexion.php");
                                  $sql = "SELECT COUNT(idproducto)
                                  FROM producto";
                                  $res = $conexion->query($sql);
                                  $count = $res->fetchColumn();
                                  print $count ." <b> Registrados </b>";
                                ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="/inventario/alumnos/listado_alumnos.php" class="card-title fs-2 fw-bold">Alumnos Registrados</a>
                                <br>
                                <br>
                                  <?php
                                  require("config/conexion.php");
                                  $sql = "SELECT COUNT(idusuario)
                                  FROM usuario";
                                  $res = $conexion->query($sql);
                                  $count = $res->fetchColumn();
                                  print $count ." <b> Registrados </b>";
                                  ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card shadow-sm">
                              <div class="card-body">
                                  <a href="/inventario/prestamos/listado_prestamos.php" class="card-title fs-2 fw-bold">Prestados</a>
                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                  <?php
                                  require("config/conexion.php");
                                  $sql = "SELECT COUNT(idprestamo)
                                  FROM prestamo";
                                  $res = $conexion->query($sql);
                                  $count = $res->fetchColumn();
                                  print $count ." <b> Registrados </b>";
                                  ?>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card shadow-sm">
                              <div class="card-body">
                                  <a href="/inventario/devoluciones/listado_devolucion.php" class="card-title fs-2 fw-bold">Equipos entregados</a>
                                  <br>
                                  <br>
                                  <p class="card-text fw-bolder"> "X" Registrados.</p>
                              </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>