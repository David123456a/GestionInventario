
<?php
include ('../db.php');


//se obtiene el ID del PRODUCTO seleccionado en el boton ACTUALIZAR, Dato viene del formulario del archivo     editarProducto.php, 
//Gracias el metodo GET se obtiene el Id del producto a actualizar,  Dato viene del archivo editarProducto.php Boton ACTUALIZAR variable ?ID
$id = $_GET['id'];

//Se consulta todos los datos del PRODUCTO en la base de datos aca la variante es que se hace un JOIN para obtener el id de la CATEGORIA
$query = "SELECT p.id, p.nombre, p.descripcion, p.precio, p.stock, p.category_id, c.id id_categoria, c.nombre nombre_categoria, p.status, pro.nombre_proveedor proveedor, pro.id_proveedor
            FROM products p 
            JOIN categories c ON p.category_id = c.id
            JOIN proveedor pro on p.id_proveedor = pro.id_proveedor
            WHERE p.id =$id;
            ";

//se asigna los datos que vienen de la base de datos a la variable local $result , utilizando la conexion a la base de datos
$result = $con->query($query);

//se almacenan  los dataos en un array $PRODUCTO, esto se usa en el FROMULARIO html de abajo.
$PRODUCTO = $result->fetch_assoc();



//Actualizacion de los campos al momento de darle GUARDAR al BOTON por medio del metodo POST datos viene del FORMULARIO Que esta abajo en el HTML
if (isset($_POST['submit'])){
    $nombre= $_POST['nombre'];
    $descripcion= $_POST['descripcion'];
    $precio= $_POST['precio'];
    $stock= $_POST['stock'];
    $category_id= $_REQUEST['CATEGORIA1']; //CATEGORIA1 viene de <select name="CATEGORIA1" id="categories" class="notItemOne">
    $status=$_POST['status'];
    $proveedor=$_POST['PROVEEDOR1'];



    $query = "UPDATE products
              SET nombre='$nombre', descripcion='$descripcion', precio=$precio,  stock=$stock, category_id=$category_id , Status='$status', id_proveedor='$proveedor'
              WHERE id=$id";
    
    if ($con->query($query)==TRUE){
        
       
        //se redirecciona al index
        header('location: ../editarProducto.php');
    }else{
        echo "Error de consulta";
    }


                            
                            
}

?>





<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css"> 
</head>


<body>

  
   <div class= "container mt-5">
        <h3>Actualizar Productos</h3>


      
<!-- FORMULARIO se asigna       a ?id se  asigna $id  para ser enviado al POST al codigo PHP en este caso esta arriba para hacer el UPDATE  -->
        <form action="updateProducto.php?id=<?php echo $id;  ?>" method="POST">

            <div class=mb-3>
                <label for="nombre">Nombre</label>                   <!-- Se imprime en la LABEL Value la posicion de la base de datos ['nombre'] esto tiene que ser igua a la base de dataos -->
                <input type="text"name="nombre" class="form-control" value=<?php echo $PRODUCTO['nombre'];?> require>
            </div>

            <div class=mb-3>
                <label for="descripcion">Descripcion</label>                <!-- Se imprime en la LABEL Value la posicion de la base de datos ['descripcion'] esto tiene que ser igua a la base de dataos -->
                <input type="string"name="descripcion" class="form-control" value=<?php echo $PRODUCTO['descripcion'];?> require>
            </div>

            <div class=mb-3>
                <label for="precio">Precio</label>
                <input type="text"name="precio" class="form-control" value=<?php echo $PRODUCTO['precio'];?> require>
            </div>

            <div>
                <label for="stock">Stock</label>
                <input type="text" name="stock" class="form-control" value="<?php echo $PRODUCTO['stock'];?>" require>
            </div>


             <!-- lista desplegable de las CATEGORIAS -->
            <div>
               
                <label for="">Categorias  <br> </label>

                    <?php
                    $query = "SELECT id category_id, nombre categoria FROM categories ORDER BY nombre";
                    $result= $con->query($query);
                    ?>
                    <!-- Con name="CATEGORIA1" se evia al POST -->
                <select name="CATEGORIA1" id="categories" class="form-control">
                                <!-- imprime datos del producto Seleccionado viene de la cadena $PRODUCTO es decir selcto con WHERE id=$id  -->    
                    <option  value="<?php echo $PRODUCTO['id_categoria'];?>" selected>  <?php echo $PRODUCTO['nombre_categoria'];?>  </option>
                            <?php
                                while ($row= $result->fetch_assoc() ){
                                ?>
                                    <!-- Separa los datos que van a ser mostrado en la lista select -->
                                    <option value="<?php echo $row['category_id'];?>">  <?php echo $row['categoria'];?>  </option>
                                <?php   } ?>

                </select>
            </div>

            <div>
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" value="<?php echo $PRODUCTO['status'];?>" require>
            </div>


            
            <div>
               
               <label for="">Proveedor  <br> </label>

                   <?php
                   $query = "   SELECT id_proveedor , nombre_proveedor FROM proveedor ORDER BY nombre_proveedor  ";
                   $result= $con->query($query);
                   ?>
                   <!-- Con name="PROVEEDOR1" se evia al POST -->
                    <select name="PROVEEDOR1" id="proveedor" class="form-control">

                        <!-- Se extrae  id_proveedor y Proveedor del array $PRODUCTO del query Select producto relacionado al id seleccionado al formulario -->      
                                          <!--Se extrae id_proveedor del array  -->                      <!-- Se extrae e imprime 'proveedor'de Array-->
                        <option  value= "<?php echo $PRODUCTO['id_proveedor'];?>"  selected  >    <?php echo $PRODUCTO['proveedor'];?>    </option>

                           <?php
                               while ($row= $result->fetch_assoc() ){
                               ?>
                                   <!--  Datos  vienen del SELECT id_proveedor , nombre_proveedor FROM proveedor ORDER BY nombre -->
                                   <option value= "<?php echo $row['id_proveedor'];?>" >  <?php echo $row['nombre_proveedor'];?>      </option>
                            <?php   } ?>

                    </select>
           </div>




          
            
            <p><br></p>                           
            <button type="submit" name="submit" class="btn btn-success">Guardar</button>

        </form>

   </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   

</body>
</html>