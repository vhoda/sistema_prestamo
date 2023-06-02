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
    require("../config/conexion.php");
    if(isset($_POST['rut'])){
        $rut = $_POST['rut'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $carrera = $_POST['carrera'];
        $cohorte = $_POST['cohorte'];
        $direccion = $_POST['direccion'];
        $fechanacimiento = $_POST['fechanacimiento'];
        $sql = "INSERT INTO usuario(idusuario, rut, nombre, apellido, carrera, direccion, añoingreso, fecha_nacimiento, idperfil) VALUES (null, '$rut', '$nombre', '$apellido', '$carrera', '$direccion', '$añoingreso', '$fecha_nacimiento')";
        $result=mysqli_query($conexion,$sql);
            if($result){
                echo"correcto";
            }
            else{
                die(mysqli_error($conexion));
            }

    }

    echo json_encode('Enviados: <br>rut: '.$rut. '<br>Nombres: '.$nombres. '<br>Apellidos: '.$apellidos. '<br>Carrera: '.$carrera. '<br>Cohorte: '.$cohorte. '<br>Dirección: '.$direccion. '<br>Fecha de nacimiento: '.$fechanacimiento);
}


?>