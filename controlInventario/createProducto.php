<?php
//el ../ sirbe para regresar un nivel o sea llegar al principio
include('../db.php');


if(isset($_POST['submit'])){
    //esto viene del formulario productos HTML, en este caso es interno en el mismo archvo create.php
    $nombre = $_POST['nombre'];
    $descripcion= $_POST['descripcion'];
    $precio= $_POST['precio'];
    $stock= $_POST['stock'];
    $category_id= $_POST['category_id'];
    $status=$_POST['status'];
    $proveedor=$_POST['proveedor'];

 

    

  

    $query ="   INSERT INTO products( nombre, descripcion, precio, stock, category_id,  Status, id_proveedor) 
                VALUES ( '$nombre', '$descripcion', $precio, $stock, $category_id,  '$status', '$proveedor' )        ";


              

    if ($con->query($query)==TRUE){
        //se asigna valor a la variable SESION para que muestre registro exitoso
        $_SESSION['message'] = 'Registro Insertado con exito';
        $_SESSION['message_type'] = 'success';
        
        //se redirecciona al index
        //header('location: ./../template.php');
        ?>
        <script>
        setTimeout(function(){
          window.location.href="../crearProducto.php"
        },100);
        </script>
        <?php

    }else{
        echo"Error de procedimiento verifique los datos";
    }
    
}
?>
