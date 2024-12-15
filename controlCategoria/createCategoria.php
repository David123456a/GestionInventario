<?php
//include('db.php');
require_once ('../db.php');

if(isset($_COOKIE['usuarioCookie'])){
    $nombre=$_COOKIE['usuarioCookie'];
}else{
    header("location: ../controlCategorias.php");
}

session_start();

if(isset($_POST['submit'])){
    
    $nombre = $_POST['nombre'];
    $descripcion= $_POST['descripcion'];
  
 

    $query ="   INSERT INTO categories (nombre, descripcion)
                VALUES ('$nombre', '$descripcion');
            ";

    if ($con->query($query)==TRUE){
        //se asigna valor a la variable SESION para que muestre registro exitoso
        $_SESSION['message'] = 'Registro Insertado con exito';
        $_SESSION['message_type'] = 'success';
        
        //se redirecciona al controlUsuarios
        header('location: ../controlCategorias.php');
    }else{
        echo"Error de procedimiento verifique los datos";
    }
    
}
?>
