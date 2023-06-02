<?php

require_once"../config/conexion.php";

   $marca = $_POST ['marca'];
   $modelo = $_POST ['modelo'];
   $tipo = $_POST ['tipo'];
   $estado = $_POST ['estado'];
   
   
   $insertar = $conexion->prepare("INSERT INTO productos(idproductos, marca, modelo, tipo, estado) VALUES (null, :marca, :modelo, :tipo, :estado)");
   
   $insertar->bindParam(':marca', $marca);
   $insertar->bindParam(':modelo', $modelo);
   $insertar->bindParam(':tipo', $tipo);
   $insertar->bindParam(':estado', $estado);

   if($insertar->execute()){
    echo "<script>alert('Equipo registrado');location.href ='../equipos/listado_equipos.php';</script>";
     
   }else{
    echo"no se ha guardado";
   }





?>