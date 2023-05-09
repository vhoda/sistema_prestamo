<?php

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$estado = $_POST['estado'];
$descripcion = $_POST['descripcion'];

if($marca === '' || $modelo === '' || $tipo === '' || $estado === '' || $descripcion === ''){
    echo json_encode ('error');
}else{
    echo json_encode('Enviados: <br>Marca: '.$marca. '<br>Modelo: '.$modelo. '<br>Tipo: '.$tipo. '<br>Estado: '.$estado. '<br>Descripción: '.$descripcion);
}


?>