<?php include('./db.php'); ?>

<?php  //require_once ('../db.php');  ?>

<?php
                
                     //Se consulta los datos a la tabla  "productos"
                     $query = " SELECT p.id, p.nombre, p.descripcion, p.precio, p.stock, c.nombre categoriaNombre, p.fecha_creacion, p.status, pro.nombre_proveedor 
                                FROM products p 
                                LEFT JOIN categories c ON c.id = p.category_id
                                LEFT JOIN proveedor pro on p.id_proveedor = pro.id_proveedor; 
                             ";

                     
                     //$query = "SELECT * FROM products";
                      $result= $con->query($query);
 
                               //se valida en un bucle si hay asociaciones de datos para mostrar todos los datos de la tabla
                     while ($row= $result->fetch_assoc() ){
                         ?>
                             <!-- Separa los datos que vienen de la consulta y los imprime en las comulmas -->
                         <tr>
                             <td>   <?php echo $row['id']; ?>            </td>
                             <td>   <?php echo $row['nombre']; ?>        </td>
                             <td>   <?php echo $row['descripcion']; ?>   </td>
                             <td>   <?php echo $row['precio']; ?>        </td>
                             <td>   <?php echo $row['stock']; ?>         </td>
                             <td>   <?php echo $row['categoriaNombre']; ?>   </td>
                             <td>   <?php echo $row['fecha_creacion']; ?></td>
                             <td>   <?php echo $row['status']; ?></td>
                             <td>   <?php echo $row['nombre_proveedor']; ?></td>
                           
                             <!-- 
                             <td> 
                            <a href="controlInventario/updateUsuario.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-whatever="@mdo">actualizar</a>
                          
                            <a href="controlinventario/deleteProducto.php?id=<?php echo $row['id'];  ?>" class= "btn btn-danger">Eliminar</a> 
                            </td>
                             -->
                        </tr>

            <?php   } 
            
            
            ?>



