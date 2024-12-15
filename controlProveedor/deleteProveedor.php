<?php
//include('../db.php');
require_once ('../db.php');
session_start();

//se obtiene el id del usuario pr el metodo get esto sirve para eliminar un solo usuario
$id = $_GET['id_proveedor'];


//consulta de la base de datos
$query="DELETE FROM proveedor WHERE id_proveedor=$id
        ";

if($con->query($query)==TRUE){
    //se asigna valor a la variable SESION  para que muestre la Eliminacion  exitosa
    $_SESSION['message'] = 'Registro Eliminado';
    $_SESSION['message_type'] = 'danger';


    //se redirecciona al READ para agregar eliminar o actualizar
    header('location: ../controlProveedores.php');
}else{
    echo "Error en la consulta";
}

?>