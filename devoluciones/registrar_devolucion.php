<!DOCTYPE html>
<html lang="en">
<head>

    <title>Registrar devolución</title>
</head>
<body>
<?php 
include'../menu.php'
?>
<div class="col py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-md-10">
                    <h2 class="fw-bolder">Devoluciones - Registrar devolución</h2>
                    <hr>
                    <div>
                        <form>
                            <div class="mb-1">
                            <label class="form-label fw-semibold">RUT</label>
                            <input type="text" placeholder="Ej: 20613446-1" class="form-control" id="disabledInput" disabled>
                            </div>
                            <div class="mb-1">
                            <label class="form-label fw-semibold">Nombres</label>
                            <input type="text" class="form-control" id="disabledInput" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Apellidos</label>
                                <input type="text" class="form-control" id="disabledInput" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Carrera:</label>
                                <select class="form-select" aria-label="Default select example" id="disabledInput" disabled>
                                    <option selected>Seleccione Carrera</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Cohorte:</label>
                                <select class="form-select" aria-label="Default select example" id="disabledInput" disabled>
                                    <option selected>Seleccione año de carrera</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                
                                <label class="form-label fw-semibold">Fecha del prestamo</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" name="fechanacimiento" class="form-control" type="date" id="disabledInput" disabled />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Fecha aproximada de la devolución</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" name="fechanacimiento" class="form-control" type="date" id="disabledInput" disabled />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div>
                            <!--Equipo-->
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Equipo</label>
                                <input type="text" class="form-control" id="disabledInput" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">SKU del equipo</label>
                                <input type="text" class="form-control" id="disabledInput" disabled>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Fecha de la entrega</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="startDate" name="fechanacimiento" class="form-control" type="date" />
                                    <span id="startDateSelected"></span>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Condiciones del equipo devuelto</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Seleccione las Condiciones del equipo</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <button type="submit" class="btn btn-primary">Registrar Devolución</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>