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
                    <h2 class="fw-bolder">Equipos- Registrar equipo</h2>
                    <hr>
                    <div>
                        <form id="formulario_equipo">
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
                                    <option value="1">Notebook</option>
                                    <option value="2">Tablet</option>
                                    <option value="3">Calculadora</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Estado del equipo:</label>
                                <select class="form-select" name="estado" aria-label="Default select example">
                                    <option selected>Seleccione El estado del equipo</option>
                                    <option value="1">Disponible</option>
                                    <option value="2">Mantenimiento</option>
                                    <option value="3">Perdida</option>
                                    <option value="4">Prestado</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label fw-semibold">Descripción</label>
                                <input type="textarea" name="descripcion" class="form-control">
                            </div>
                            <div class="mb-1">
                                <button type="submit" class="btn btn-primary">Registrar equipo</button>
                            </div>
                        </form>
                        <div class="mb-1" id="respuesta">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="registroequipo.js"></script>
</body>
</html>