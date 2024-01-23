<?php  
    session_start();   // se inicia sesión
    
    $_SESSION['usuario'] = 'xavier';    //registro con valor asignado, que se puede cambiar por el de una variable que tenga almacenado un registro
    header("Location:panel.php");   // a donde va a redirigir la validación una vez que sea correcta.


?>