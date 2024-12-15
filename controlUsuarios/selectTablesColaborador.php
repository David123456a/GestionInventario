<?php //include('../db.php'); ?>

<?php  //require_once ('../db.php');  ?>

<?php
                
                    //Se consulta los datos a la tabla  "usuario"
                //$query = "SELECT * FROM users";
                $query = "  SELECT u.id, u.nombre, u.email, u.usuario, u.contraseña, u.id_rol, u.fecha_creacion, r.nombre rol 
                            FROM users u 
                            LEFT JOIN rol r ON u.id_rol = r.id_rol;
                        ";
                $result= $con->query($query);
                
                    //se valida en un bucle si hay asociaciones de datos para mostrar todos los datos de la tabla
                while ($row= $result->fetch_assoc() ){
                ?>
                    <!-- Separa los datos que vienen de la consulta y los imprime en las comulmas -->
                <tr>
                    <td>   <?php echo $row['id']; ?>            </td>
                    <td>   <?php echo $row['nombre']; ?>        </td>
                    <td>   <?php echo $row['email']; ?>         </td>
                    <td>   <?php echo $row['usuario']; ?>       </td>
                    <td>   <?php// echo $row['contraseña']; ?>       </td>
                    <td>   <?php echo $row['id_rol']; ?>        </td>
                    <td>   <?php echo $row['rol']; ?>           </td>
                    <td>   <?php echo $row['fecha_creacion']; ?></td>
                    
                    <!--
                    <td>                             
                            <a href="controlUsuarios/updateUsuario.php?id=<?php echo $row['id'];  ?>"   class="btn btn-warning">Actualizar</a> 
                                                                  
                            <a href="controlUsuarios/deleteUsuario.php?id=<?php echo $row['id'];  ?>"   class= "btn btn-danger">Eliminar</a> 
                            
                    </td>         -->
                </tr>

            <?php   } 
            
            
            ?>










<!-- BOTON PARA LA MODAL -->
<!-- 
<a href="controlUsuarios/updateUsuario.php?id=<?php //echo $row['id']; ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-whatever="@mdo">MODAL</a>
 -->



<!--    MODAL pendiente de configurar -->

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
                                <label for="email">Email</label>
                                <input type="text"name="email" class="form-control" value=<?php echo $usuario['email'];?> require>
                            </div>

                            <div class=mb-3>
                                <label for="user">Usuario</label>
                                <input type="text"name="user" class="form-control" value=<?php echo $usuario['usuario'];?> require>
                            </div>

                            <div>
                                <label for="password">Contraseña</label>
                                <input type="text" name="password" class="form-control" value="<?php echo $usuario['contraseña'];?>" require>
                            </div>

                            <div>
                                <label for="id_rol">Tipo de Usuario</label>
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

