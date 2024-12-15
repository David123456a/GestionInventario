
<?php
include ('../db.php');


//se obtiene el id del usuario seleccionado por el metodo GET
$id = $_GET['id'];

//Se consulta todos los datos del idUsuraion en la base de datos
$query = "  SELECT u.nombre, u.email, u.usuario, u.contraseña, r.id_rol, r.nombre as nombre_rol
            FROM users u
            JOIN rol r ON u.id_rol= r.id_rol
            WHERE u.id=$id;
        ";

//se asigna los datos que vienen de la base de datos a la variable local $result
$result = $con->query($query);
$usuario = $result->fetch_assoc();



//Actualizacion de los campos al momento de darle Guardad al Boton del formulario que actualiza los datos por medio de los name
if (isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $user= $_POST['user'];
    $password= $_POST['password'];
    $id_rol= $_POST['ROL1'];
   // $created = $_POST['fecha_creacion'];

    $query = "UPDATE users
              SET nombre='$name', email='$email', usuario='$user',  contraseña='$password', id_rol=$id_rol, fecha_creacion =NOW()
              WHERE id=$id";

    if ($con->query($query)==TRUE){
        
     
        //se redirecciona al index
        header('location: ../controlUsuarios.php');
    }else{
        echo "Error de consulta";

    }
                            
                            
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<div class= "container mt-5">
        <h3>Actualizar usuarios</h3>
             <!-- Agregar un  formulario el ?id es el dato que se en via en el POST -->
        <form action="updateUsuario.php?id=<?php echo $id;?>"   method="POST">

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
               
                   <label for="">Tipo de Usuario  <br> </label>

                   <?php
                   $query = "   SELECT id_rol , nombre FROM rol ORDER BY nombre  ";
                   $result= $con->query($query);
                   ?>

                   <!--se asigna  name="ROL1" se evia en el formulario por  $POST -->
                    <select       name="ROL1"     id="id_rol" class="form-control">

                        <!-- Se extrae  id_rol y nombre_rol del array $usuario del query Select rol relacionado al id seleccionado en el boton ACTUALIZAR del archivo  controlUsuarios.php -->      
                                          <!--Se extrae id_usuario del array  -->                      <!-- Se extrae e imprime 'proveedor'de Array-->
                        <option  value= "<?php echo $usuario['id_rol'];?>"  selected  >    <?php echo $usuario['nombre_rol'];?>    </option>

                           <?php
                               while ($row= $result->fetch_assoc() ){
                               ?>
                                   <!--  Datos vienen $query = "SELECT id_rol , nombre FROM rol ORDER BY nombre  "; esta consulta esta en el div que contiene el while ose aca -->
                                   <option value= "<?php echo $row['id_rol'];?>" >     <?php echo $row['nombre'];?>      </option>
                            <?php   } ?>

                    </select>
           </div>


       
            <button type="submit" name="submit" class="btn btn-success">Guardar</button>

        </form>

   </div>

   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   





