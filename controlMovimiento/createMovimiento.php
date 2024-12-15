<?php
//el ../ sirbe para regresar un nivel o sea llegar al principio
include('../db.php');


if(isset($_POST['submit'])){
    //esto viene del formulario productos HTML, en este caso es interno en el mismo archvo create.php
    $producto = $_POST['producto'];
    $tipo_movimiento= $_POST['tipo_movimiento'];
    $cantidad= $_POST['cantidad'];
    $observacion= $_POST['observacion'];

    //echo $producto;
    //echo $tipo_movimiento;
    //echo $cantidad;
    //echo $observacion;

    
    $query ="   INSERT INTO movimientos( id_producto, tipo_movimiento, cantidad, observacion) 
                VALUES ( $producto, '$tipo_movimiento', $cantidad, '$observacion' )        ";


              

    if ($con->query($query)==TRUE){
        //se asigna valor a la variable SESION para que muestre registro exitoso
        $_SESSION['message'] = 'Registro Insertado con exito';
        $_SESSION['message_type'] = 'success';
        
        //se redirecciona al index
        //header('location: ./../template.php');
        ?>
        <script>
        setTimeout(function(){
          window.location.href="../crearMovimiento.php"
        },1000);
        </script>
        <?php

    }else{
        echo"Error de procedimiento verifique los datos";
    }
 
    
}
?>
