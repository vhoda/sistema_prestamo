
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registrar Prestamo</title>
</head>
<body>
<?php 
include'../menu.php'
?>
<div class="col py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                    <h2 class="fw-bolder">Prestamos - Registrar Prestamo</h2>
                    <hr>
                    <div>
                        <form name="formulario1" action="guardar.php" method="POST">
                            <div class="mb-1">
                                <label class="form-label fw-semibold">ID: (NO modificar)</label>
                                <input type="text" class="form-control" name="idusuario">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">RUT</label>
                                <input type="text" class="form-control" name="rut" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Nombres</label>
                                <input type="text" class="form-control" name="nombre" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Apellidos</label>
                                <input type="text" class="form-control" name="apellido" id="disabledInput" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Carrera:</label>
                                <input type="text" class="form-control" name="carrera" id="disabledInput" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">SKU del equipo (NO modificar)</label>
                                <input type="text" class="form-control" name="idproductos">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Marca</label>
                                <input type="text" class="form-control" id="disabledInput" name="marca" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Modelo</label>
                                <input type="text" class="form-control" id="disabledInput" name="modelo" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Tipo</label>
                                <input type="text" class="form-control" id="disabledInput" name="tipo" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Fecha del prestamo</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" class="form-control" name="fecha_prestamo" type="date" />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Fecha aproximada de entrega</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" class="form-control" name="fecha_aprox" type="date" />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div>
                            <div class="mb-1">
                                <button type="submit" class="btn btn-primary">Registrar Prestamo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
const valores = window.location.search;
const urlParams = new URLSearchParams(valores);
var idusuario = urlParams.get('idusuario');
var rut = urlParams.get('rut');
var nombre = urlParams.get('nombre');
var apellido = urlParams.get('apellido');
var carrera = urlParams.get('carrera');
var idproductos = urlParams.get('idproductos');
var marca = urlParams.get('marca');
var modelo = urlParams.get('modelo');
var tipo = urlParams.get('tipo');
//console.log(rut);
document.formulario1.idusuario.value=idusuario;
document.formulario1.rut.value=rut;
document.formulario1.nombre.value=nombre;
document.formulario1.apellido.value=apellido;
document.formulario1.carrera.value=carrera;
document.formulario1.idproductos.value=idproductos;
document.formulario1.marca.value=marca;
document.formulario1.modelo.value=modelo;
document.formulario1.tipo.value=tipo;
</script>
</html>

