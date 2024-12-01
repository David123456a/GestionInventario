<?php
//include('db.php');
require_once ('../db.php');

if(isset($_COOKIE['usuarioCookie'])){
    $nombre=$_COOKIE['usuarioCookie'];
}else{
    header("location: ../controlUsuarios.php");
}

session_start();

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email= $_POST['email'];
    $user= $_POST['user'];
    $contraseña= $_POST['contraseña'];
    $id_rol= $_POST['id_rol'];
 

    $query ="INSERT INTO users(nombre, email, usuario, contraseña, id_rol, fecha_creacion) 
                     VALUES ('$name', '$email', '$user','$contraseña', $id_rol, NOW())";

    if ($con->query($query)==TRUE){
        //se asigna valor a la variable SESION para que muestre registro exitoso
        $_SESSION['message'] = 'Registro Insertado con exito';
        $_SESSION['message_type'] = 'success';
        
        //se redirecciona al controlUsuarios
        header('location: ../controlUsuarios.php');
    }else{
        echo"Error de procedimiento verifique los datos";
    }
    
}
?>
