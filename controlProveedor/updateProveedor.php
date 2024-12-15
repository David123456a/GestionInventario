
<?php
include ('../db.php');


//se obtiene el id del usuario seleccionado por el metodo GET id_proveedor se asigna dos veces ya que dos veces se le da click a los botones
$id_proveedor2 = $_GET['id_proveedor'];

//Se consulta todos los datos del idUsuraion en la base de datos
$query = "  SELECT *
            FROM proveedor
            WHERE id_proveedor=$id_proveedor2;
        ";

//se asigna los datos que vienen de la base de datos a la variable local $result
$result = $con->query($query);
$proveedor = $result->fetch_assoc();




//Actualizacion de los campos al momento de darle Guardad al Boton del formulario que actualiza los datos por medio de los name
if (isset($_POST['submit'])){

    $nombre_proveedor= $_POST['nombre_proveedor'];
    $telefono_proveedor= $_POST['telefono_proveedor'];
    $direccion_proveedor= $_POST['direccion_proveedor'];
   

    $query = "  UPDATE proveedor
                SET nombre_proveedor='$nombre_proveedor', telefono_proveedor='$telefono_proveedor', direccion_proveedor='$direccion_proveedor'
                WHERE id_proveedor=$id_proveedor2
              ";

    if ($con->query($query)==TRUE){
        
     
        //se redirecciona al index
        header('location: ../controlProveedores.php');
    }else{
        echo "Error de consulta";

    }
                            
                            
}

?>





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<div class= "container mt-5">

        <h3>Actualizar Proveedor</h3>

               
             <!-- Agregar un  formulario el ?id es el dato que se en via en el POST -->
        <form action="updateProveedor.php?id_proveedor=<?php echo $id_proveedor2;?>"   method="POST">

            <div class=mb-3>
                <label for="nombre_proveedor">Nombre</label>
                <input type="text"name="nombre_proveedor" class="form-control" value=<?php echo $proveedor['nombre_proveedor'];?> require>
            </div>

            <div class=mb-3>
                <label for="telefono_proveedor">Telefono</label>
                <input type="text"name="telefono_proveedor" class="form-control" value=<?php echo $proveedor['telefono_proveedor'];?> require>
            </div>

            <div class=mb-3>
                <label for="direccion_proveedor">Direccion</label>
                <input type="text"name="direccion_proveedor" class="form-control" value=<?php echo $proveedor['direccion_proveedor'];?> require>
            </div>


       
            <button type="submit" name="submit" class="btn btn-success">Guardar</button>

        </form>

   </div>

   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   





