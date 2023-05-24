
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
                        <form name="formulario1" action="consulta.php" method="POST">
                            <div class="mb-1">
                            <label class="form-label fw-semibold">RUT</label>
                            <input type="text" placeholder="Ej: 20613446-1" class="form-control" id="rut" name="rut" disabled>
                            </div>
                            <div class="mb-1">
                            <label class="form-label fw-semibold">Nombres</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" disabled>
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
                                <label class="form-label fw-semibold">SKU del equipo</label>
                                <input type="text" class="form-control" name="idproducto" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Equipo</label>
                                <input type="text" class="form-control" id="disabledInput" name="marca" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Modelo</label>
                                <input type="text" class="form-control" id="disabledInput" name="modelo" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Fecha del prestamo</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" class="form-control" name="fecha_entrega" type="date" />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Fecha aproximada de entrega</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" class="form-control" type="date" />
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
var rut = urlParams.get('rut');
var nombre = urlParams.get('nombre');
var apellido = urlParams.get('apellido');
var carrera = urlParams.get('carrera');
var idproducto = urlParams.get('idproducto');
var marca = urlParams.get('marca');
var modelo = urlParams.get('modelo');
var fecha_entrega = urlParams.get('fecha_entrega');
//console.log(rut);
document.formulario1.rut.value=rut;
document.formulario1.nombre.value=nombre;
document.formulario1.apellido.value=apellido;
document.formulario1.carrera.value=carrera;
document.formulario1.idproducto.value=idproducto;
document.formulario1.marca.value=marca;
document.formulario1.modelo.value=modelo;
document.formulario1.fecha_entrega.value=fecha_entrega;

</script>
</html>

