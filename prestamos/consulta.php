<!DOCTYPE html>
<html lang="en">
<head>

    <title>Consultar RUT</title>
</head>
<body>
<?php 
include'../menu.php'
?>
<div class="col py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                    <h2 class="fw-bolder">Prestamos - Consultar RUT</h2>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <form id="formulario_consultaprestamo">
                            <div class="mb-1">
                                <label class="form-label fw-semibold">RUT</label>
                                <input type="text" placeholder="Ej: 20613446-1" name="rut" class="form-control">
                                <label class="form-label fw-semibold">SKU del equipo</label>
                                <input type="text" placeholder="Ej: 12345" name="idproducto" class="form-control">
                            </div>
                            <div class="mb-1">
                                <button type="submit" class="btn btn-primary">Consultar</button>
                            </div>
                            </div>
                        </form>
                        <div class="mb-1" id="respuesta">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/inventario/prestamos/js/consulta.js"></script>
</body>
</html>