<?php
//include('db.php');
require_once ('../db.php');

if(isset($_COOKIE['usuarioCookie'])){
    $nombre=$_COOKIE['usuarioCookie'];
}else{
    header("location: ../controlProveedores.php");
}

session_start();

if(isset($_POST['submit'])){
    
    $nombre_proveedor= $_POST['nombre_proveedor'];
    $telefono_proveedor= $_POST['telefono_proveedor'];
    $direccion_proveedor= $_POST['direccion_proveedor'];
 

    $query ="   INSERT INTO proveedor (nombre_proveedor, telefono_proveedor, direccion_proveedor )
                VALUES              ('$nombre_proveedor','$telefono_proveedor','$direccion_proveedor')
            ";

    if ($con->query($query)==TRUE){
        //se asigna valor a la variable SESION para que muestre registro exitoso
        $_SESSION['message'] = 'Registro Insertado con exito';
        $_SESSION['message_type'] = 'success';
        
        //se redirecciona al controlUsuarios
        header('location: ../controlProveedores.php');
    }else{
        echo"Error de procedimiento verifique los datos";
    }
    
}
?>
