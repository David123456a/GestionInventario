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
                           
                             <td> 
                             <a href="controlInventario/updateProducto.php?id=<?php echo $row['id'];  ?>" class="btn btn-warning">Actualizar</a>     
                                    
                            <a href="controlInventario/updateProducto.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-whatever="@mdo">MODAL</a>                          
                            </td>
                            
                        </tr>

            <?php   } 
            
            
            ?>











<!-- MODAL PENDIENTE DE CONFIGURAR -->

<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


                        <form>

            
                            <div class=mb-3>
                                <label for="name">Nombre</label>
                                <input type="text"name="name" class="form-control" value=<?php echo $usuario['nombre'];?> require>
                            </div>

                            <div class=mb-3>
                                <label for="email">Descripcion</label>
                                <input type="text"name="email" class="form-control" value=<?php echo $usuario['email'];?> require>
                            </div>

                            <div class=mb-3>
                                <label for="user">Precio</label>
                                <input type="text"name="user" class="form-control" value=<?php echo $usuario['usuario'];?> require>
                            </div>

                            <div>
                                <label for="password">Stock</label>
                                <input type="text" name="password" class="form-control" value="<?php echo $usuario['contraseña'];?>" require>
                            </div>

                            <div>
                                <label for="id_rol">Categoria</label>
                                <input type="Number" name="id_rol" class="form-control "value="<?php echo $usuario['id_rol'];?>" require>            
                            </div>     

                         
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" name="submit" class="btn btn-success">Guardar</button>

                            </div>
                        </form>
    </div>
  </div>
</div>

