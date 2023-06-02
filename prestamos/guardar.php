<?php
<?php 
include'../menu.php'
?>

require_once"../config/conexion.php"; 
    $idusuario = $_POST ['idusuario'];
    $idproductos = $_POST ['idproductos'];
    $fecha_prestamo = $_POST ['fecha_prestamo'];
    $fecha_aprox = $_POST ['fecha_aprox'];

      
   
    $insertar = $conexion->prepare("INSERT INTO prestamo(idprestamo, idusuario, idproductos, fecha_prestamo, fecha_aprox) VALUES (null, :idusuario, :idproductos, :fecha_prestamo, :fecha_aprox)");
    $insertar->bindParam(':idusuario', $idusuario);
    $insertar->bindParam(':idproductos', $idproductos);
    $insertar->bindParam(':fecha_prestamo', $fecha_prestamo);
    $insertar->bindParam(':fecha_aprox', $fecha_aprox);


    if($insertar->execute()){
        echo "<script>alert('Prestamo registrado');location.href ='../prestamos/listado_prestamos.php';</script>";
        
    }else{
        echo"no se ha guardado";
    }





?>