<?php  
    session_start();
    session_destroy();
    header("location: cerrar_sesion.php");
?>


