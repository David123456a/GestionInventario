<?php //include('../db.php'); ?>



<?php
                
                    //Se consulta los datos a la tabla  "usuario"
                //$query = "SELECT * FROM users";
                $query = "  SELECT *
                            FROM categories;
                            ";
                $result= $con->query($query);
                
                    //se valida en un bucle si hay asociaciones de datos para mostrar todos los datos de la tabla
                while ($row= $result->fetch_assoc() ){
                ?>
                    <!-- Separa los datos que vienen de la consulta y los imprime en las comulmas -->
                <tr>
                    <td>   <?php echo $row['id']; ?>                </td>
                    <td>   <?php echo $row['nombre']; ?>            </td>
                    <td>   <?php echo $row['descripcion']; ?>       </td>
                    <td>   <?php echo $row['fecha_creacion']; ?>    </td>
                    
                    <td>                             
                            <a href="controlCategoria/updateCategoria.php?id=<?php echo $row['id'];  ?>" class="btn btn-warning">Actualizar</a> 
                                                                  
                            <a href="controlCategoria/deleteCategoria.php?id=<?php echo $row['id'];  ?>" class= "btn btn-danger">Eliminar</a> 
                    </td>
                </tr>

            <?php   } 
            
            
            ?>









