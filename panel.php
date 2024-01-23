<?php  
    session_start(); // reanuda la sessión actual dentro de esta sección de la página
    error_reporting(0); // para que no aparezcan los errores que lanza php en caso de que existan 

    // $varsession = $_SESSION['usuario'];
    // if ($varsession == null || $varsession = '') {
    //     echo'Usted no tiene autorización ';
    //     die();
    // }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <h1>Bienvenido: <?php  echo $_SESSION['usuario']?></h1>
    <a href="cerrar_sesion.php">Cerrar Sesión</a>
</head>
<body>
    
</body>
</html>