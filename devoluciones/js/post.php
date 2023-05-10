<?php

$rut = $_POST['rut'];

if($rut === ''){
    echo json_encode ('error');
}else{
    echo json_encode('Enviados: <br>RUT del estudiante: '.$rut);
}


?>