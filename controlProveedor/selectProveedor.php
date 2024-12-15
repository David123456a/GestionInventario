<?php //include('../db.php'); ?>

<?php  //require_once ('../db.php');  ?>

<?php
                
                    //Se consulta los datos a la tabla  "usuario"
                //$query = "SELECT * FROM users";
                $query = "  SELECT id_proveedor , nombre_proveedor, telefono_proveedor, direccion_proveedor,fecha_creacion
                            FROM proveedor  ;
                            ";
                $result= $con->query($query);
                
                    //se valida en un bucle si hay asociaciones de datos para mostrar todos los datos de la tabla
                while ($row= $result->fetch_assoc() ){
                ?>
                    <!-- Separa los datos que vienen de la consulta y los imprime en las comulmas -->
                <tr>
                    <td>   <?php echo $row['id_proveedor']; ?>              </td>
                    <td>   <?php echo $row['nombre_proveedor']; ?>          </td>
                    <td>   <?php echo $row['telefono_proveedor']; ?>        </td>
                    <td>   <?php echo $row['direccion_proveedor']; ?>       </td>
                    <td>   <?php echo $row['fecha_creacion']; ?>            </td>
                    
                    <td>                             
                            <a href="controlProveedor/updateProveedor.php?id_proveedor=<?php echo $row['id_proveedor'];  ?>" class="btn btn-warning">Actualizar</a> 
                                                                  
                            <a href="controlProveedor/deleteProveedor.php?id_proveedor=<?php echo $row['id_proveedor'];  ?>" class= "btn btn-danger">Eliminar</a> 
                     </td>
                </tr>

            <?php   } 
            
            
            ?>











