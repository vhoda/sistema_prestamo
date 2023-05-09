<?php

$rut = $_POST['rut'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$carrera = $_POST['carrera'];
$cohorte = $_POST['cohorte'];
$direccion = $_POST['direccion'];
$fechanacimiento = $_POST['fechanacimiento'];

if($rut === '' || $nombres === '' || $apellidos === '' || $carrera === '' || $cohorte === '' || $direccion === '' || $fechanacimiento === ''){
    echo json_encode ('error');
}else{
    echo json_encode('Enviados: <br>rut: '.$rut. '<br>Nombres: '.$nombres. '<br>Apellidos: '.$apellidos. '<br>Carrera: '.$carrera. '<br>Cohorte: '.$cohorte. '<br>Dirección: '.$direccion. '<br>Fecha de nacimiento: '.$fechanacimiento);
}


?>