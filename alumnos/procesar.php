<?php
<?php 
include'../menu.php'
?>
require_once"../config/conexion.php";

   $rut = $_POST ['rut'];
   $nombre = $_POST ['nombre'];
   $apellido = $_POST ['apellido'];
   $carrera = $_POST ['carrera'];
   $cohorte = $_POST ['cohorte'];
   $direccion = $_POST ['direccion'];
   $anoingreso = $_POST ['anoingreso'];
   $fecha_nacimiento = $_POST ['fecha_nacimiento'];
   
   $insertar = $conexion->prepare("INSERT INTO usuario(idusuario, rut, nombre, apellido, carrera, cohorte, direccion, anoingreso, fecha_nacimiento) VALUES (null, :rut, :nombre, :apellido, :carrera, :cohorte, :direccion, :anoingreso, :fecha_nacimiento)");
   
   $insertar->bindParam(':rut', $rut);
   $insertar->bindParam(':nombre', $nombre);
   $insertar->bindParam(':apellido', $apellido);
   $insertar->bindParam(':carrera', $carrera);
   $insertar->bindParam(':cohorte', $cohorte);
   $insertar->bindParam(':direccion', $direccion);
   $insertar->bindParam(':anoingreso', $anoingreso);
   $insertar->bindParam(':fecha_nacimiento', $fecha_nacimiento);

   if($insertar->execute()){
    echo "<script>alert('Alumno registrado correctamente');location.href ='../alumnos/listado_alumnos.php';</script>";
     
   }else{
    echo"no se ha guardado";
   }





?>