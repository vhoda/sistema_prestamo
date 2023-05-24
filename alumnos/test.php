<?php 
                    $inc = include(../config/conexion.php);
                    if($inc){
                        $consulta = "SELECT * FROM usuario";
                        $resultado = mysqli_query($conexion, $consulta);
                        if($resultado){
                            while($row = resultado->fetch_array()){
                                $rut = $row['rut'];
                            }
                        }
                    } 
<td><?php echo $rut; ?></td>
