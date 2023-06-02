<!DOCTYPE html>
<html lang="en">
<head>

    <title>Registrar alumno</title>

</head>
<body>
<?php 
include'../menu.php'
?>
<div class="col py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                    <h2 class="fw-bolder">Alumnos - Registrar alumno</h2>
                    <hr>
                    <div>
                        <form action="procesar.php" method="POST" >
                            <div class="mb-1">
                            <label class="form-label fw-semibold">RUT</label>
                            <input type="text" placeholder="Ej: 20613446-1" name="rut" class="form-control">
                            </div>
                            <div class="mb-1">
                            <label class="form-label fw-semibold">Nombres</label>
                            <input type="text" name="nombre" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Apellidos</label>
                                <input type="text" name="apellido" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Carrera:</label>
                                <input type="text" name="carrera" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Cohorte:</label>
                                <input type="text" name="cohorte" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Dirección</label>
                                <input type="text" name="direccion" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Año de ingreso</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" name="anoingreso" class="form-control" type="date" />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div> 
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Fecha de nacimiento</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" name="fecha_nacimiento" class="form-control" type="date" />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div> 
                            <div class="mb-1">
                                <button type="submit" class="btn btn-primary">Registrar alumno</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<script src="registroalumno.js"></script>-->
</body>
</html>