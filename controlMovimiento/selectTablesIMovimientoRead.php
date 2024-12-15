<?php include('./db.php'); ?>

<?php  //require_once ('../db.php');  ?>

<?php
                
                     //Se consulta los datos a la tabla  "productos"
                     $query = " SELECT m.id_movimiento,  p.nombre as producto, m.tipo_movimiento, m.cantidad, m.fecha_movimiento, m.observacion
                                FROM movimientos m 
                                LEFT JOIN products p  ON m.id_producto = p.id
                                ; 
                             ";

                    
                      $result= $con->query($query);
 
                               //se valida en un bucle si hay asociaciones de datos para mostrar todos los datos de la tabla
                     while ($row= $result->fetch_assoc() ){
                         ?>
                             <!-- Separa los datos que vienen de la consulta y los imprime en las comulmas -->
                         <tr>
                             <td>   <?php echo $row['id_movimiento']; ?>            </td>
                             <td>   <?php echo $row['producto']; ?>                 </td>
                             <td>   <?php echo $row['tipo_movimiento']; ?>          </td>
                             <td>   <?php echo $row['cantidad']; ?>          </td>
                             <td>   <?php echo $row['fecha_movimiento']; ?>         </td>
                             <td>   <?php echo $row['observacion']; ?>              </td>
                            
                         
                        </tr>

            <?php   } 
            
            
            ?>



