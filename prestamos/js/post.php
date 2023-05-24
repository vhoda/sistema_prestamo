<?php


$rut = $_POST['rut'];
$idproducto = $_POST['idproducto'];

if($rut === '' || $idproducto === ''){
    echo json_encode ('error');
}else{
    //aqui se envia datos para revisar si algo se encuentra
    include "../../config/conexion.php";
    $sql = "select 
    usuario.rut,
    usuario.nombre, 
    usuario.apellido, 
    usuario.carrera,
    prestamo.fecha_entrega,
    producto.idproducto, 
    producto.marca,
    producto.modelo
    from usuario, producto, prestamo, bodega,perfil
    WHERE
    perfil.idperfil=usuario.idperfil
    AND
    usuario.idusuario=prestamo.idusuario
    and
    prestamo.idproducto=producto.idproducto
    AND
    producto.idbodega=bodega.idbodega
    AND
    usuario.rut='$rut'
    AND
    prestamo.idproducto=$idproducto";

    $query = $conexion -> prepare($sql); 
    $query -> execute(); 
    $results = $query -> fetchAll(PDO::FETCH_OBJ); 

    if($query -> rowCount() > 0)   { 
    foreach($results as $result) { 
    
    $rut=$result -> rut;
    $nombre=$result -> nombre;
    $apellido=$result -> apellido;
    $carrera=$result -> carrera;
    $idproducto=$result -> idproducto;
    $marca=$result -> marca;
    $modelo=$result -> modelo;
    $fecha_entrega=$result -> fecha_entrega;

    }
    }


   

   

    echo json_encode(array('rut'=>$rut,'nombre'=>$nombre,'apellido'=>$apellido,'carrera'=>$carrera,'idproducto'=>$idproducto,'marca'=>$marca,'modelo'=>$modelo,'fecha_entrega'=>$fecha_entrega));
    

}


?>