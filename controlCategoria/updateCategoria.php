
<?php
include ('../db.php');


//se obtiene el id del usuario seleccionado por el metodo GET
$id = $_GET['id'];

//Se consulta todos los datos del idUsuraion en la base de datos
$query = "  SELECT *
            FROM categories
            WHERE id=$id;
        ";

//se asigna los datos que vienen de la base de datos a la variable local $result
$result = $con->query($query);
$categoria = $result->fetch_assoc();



//Actualizacion de los campos al momento de darle Guardad al Boton del formulario que actualiza los datos por medio de los name
if (isset($_POST['submit'])){

    $nombre= $_POST['nombre'];
    $descripcion= $_POST['descripcion'];
   

    $query = "UPDATE categories
              SET nombre='$nombre', descripcion='$descripcion'
              WHERE id=$id";

    if ($con->query($query)==TRUE){
        
     
        //se redirecciona al index
        header('location: ../controlCategorias.php');
    }else{
        echo "Error de consulta";

    }
                            
                            
}

?>





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<div class= "container mt-5">

        <h3>Actualizar Categoria</h3>


             <!-- Agregar un  formulario el ?id es el dato que se en via en el POST -->
        <form action="updateCategoria.php?id=<?php echo $id;?>"   method="POST">

            <div class=mb-3>
                <label for="nombre">Nombre</label>
                <input type="text"name="nombre" class="form-control" value=<?php echo $categoria['nombre'];?> require>
            </div>

            <div class=mb-3>
                <label for="descripcion">descripcion</label>
                <input type="text"name="descripcion" class="form-control" value=<?php echo $categoria['descripcion'];?> require>
            </div>


       
            <button type="submit" name="submit" class="btn btn-success">Guardar</button>

        </form>

   </div>

   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   





