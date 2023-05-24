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
                        <form id="formulario_alumno">
                            <div class="mb-1">
                            <label class="form-label fw-semibold">RUT</label>
                            <input type="text" placeholder="Ej: 20613446-1" name="rut" class="form-control">
                            </div>
                            <div class="mb-1">
                            <label class="form-label fw-semibold">Nombres</label>
                            <input type="text" name="nombres" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Carrera:</label>
                                <select class="form-select" name="carrera" aria-label="Default select example">
                                    <option selected>Seleccione Carrera</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Cohorte:</label>
                                <select class="form-select" name="cohorte" aria-label="Default select example">
                                    <option selected>Seleccione año de carrera</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Dirección</label>
                                <input type="text" name="direccion" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Fecha de nacimiento</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" name="fechanacimiento" class="form-control" type="date" />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div>
                            <div class="mb-1">
                                <button type="submit" class="btn btn-primary">Registrar alumno</button>
                            </div>
                        </form>
                        <div class="mb-1" id="respuesta">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="registroalumno.js"></script>
</body>
</html>