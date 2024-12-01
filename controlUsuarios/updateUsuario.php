
<?php
include ('../db.php');


//se obtiene el id del usuario seleccionado por el metodo GET
$id = $_GET['id'];

//Se consulta todos los datos del idUsuraion en la base de datos
$query = "SELECT * FROM users WHERE id=$id";

//se asigna los datos que vienen de la base de datos a la variable local $result
$result = $con->query($query);
$usuario = $result->fetch_assoc();



//Actualizacion de los campos al momento de darle Guardad al Boton
if (isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $user= $_POST['user'];
    $password= $_POST['password'];
    $id_rol= $_POST['id_rol'];
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
                <label for="id_rol">Tipo de Usuario</label>
                <input type="Number" name="id_rol" class="form-control "value="<?php echo $usuario['id_rol'];?>" require>            
            </div>
       
            <button type="submit" name="submit" class="btn btn-success">Guardar</button>

        </form>

   </div>

   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   





