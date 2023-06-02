<?php
$rut = $_POST['rut'];
$idproductos = $_POST['idproductos'];

if($rut === '' || $idproductos === ''){
    echo json_encode ('error');
}else{
    //aqui se envia datos para revisar si algo se encuentra
    include "../../config/conexion.php";
    $sql = "select usuario.idusuario,
    usuario.rut,
    usuario.nombre,
    usuario.apellido,
    usuario.carrera,
    productos.idproductos,
    productos.marca,
    productos.modelo,
    productos.tipo
    FROM usuario, productos
    WHERE
    usuario.idusuario
    AND 
    usuario.rut= '$rut'
    AND
    productos.idproductos= '$idproductos'";

    $query = $conexion -> prepare($sql); 
    $query -> execute(); 
    $results = $query -> fetchAll(PDO::FETCH_OBJ); 

    if($query -> rowCount() > 0)   { 
    foreach($results as $result) { 
    
    $idusuario=$result -> idusuario;
    $rut=$result -> rut;
    $nombre=$result -> nombre;
    $apellido=$result -> apellido;
    $carrera=$result -> carrera;
    $idproductos=$result -> idproductos;
    $marca=$result -> marca;
    $modelo=$result -> modelo;
    $tipo=$result -> tipo;

    }
    }

    echo json_encode(array('idusuario'=>$idusuario,'rut'=>$rut,'nombre'=>$nombre,'apellido'=>$apellido,'carrera'=>$carrera,'idproductos'=>$idproductos,'marca'=>$marca,'modelo'=>$modelo,'tipo'=>$tipo));
    

}


?>