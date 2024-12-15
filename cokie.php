<?php

if(isset($_POST['usuario'])){
    $nombre=$_POST['usuario'];
    setcookie("usuarioCookie", $nombre, time() +20, "/"  );
    
}


header("location: login2.php");
exit();
?>