<?php

$rut = $_POST['rut'];
$sku = $_POST['sku'];

if($rut === '' || $sku === ''){
    echo json_encode ('error');
}else{
    echo json_encode('Enviados: <br>RUT del estudiante: '.$rut. '<br>SKU del equipo: '.$sku);
}


?>