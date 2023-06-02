<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrar equipo</title>
</head>
<body>
<?php 
include'../menu.php'
?>
    <div class="col py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                    <h2 class="fw-bolder">Equipos - Registrar equipo</h2>
                    <hr>
                    <div>
                        <form  action="procesar.php" method="POST">
                            <div class="mb-1">
                            <label class="form-label fw-semibold">Marca</label>
                            <input type="text" name="marca" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Modelo</label>
                                <input type="text" name="modelo" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Tipo:</label>
                                <select class="form-select" name="tipo" aria-label="Default select example">
                                    <option selected>Seleccione tipo del equipo</option>
                                    <option value="Notebook">Notebook</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Calculadora">Calculadora</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Estado del equipo:</label>
                                <select class="form-select" name="estado" aria-label="Default select example">
                                    <option selected>Seleccione El estado del equipo</option>
                                    <option value="Disponible">Disponible</option>
                                    <option value="Mantenimiento">Mantenimiento</option>
                                    <option value="Perdida">Perdida</option>
                                    <option value="Prestado">Prestado</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <button type="submit" class="btn btn-primary">Registrar equipo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<script src="registroequipo.js"></script>-->
</body>
</html>