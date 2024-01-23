<?php  
    session_start(); // reanuda la sessión actual dentro de esta sección de la página
    error_reporting(0); // para que no aparezcan los errores que lanza php en caso de que existan 
    $varsesion = $_SESSION['usuario'];
    if ($varsesion == null || $varsesion = '') {
        echo'No tienes acceso a esta sección';   
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>

</head>
<body>
    <h2>Panel de Administrador</h2>
    <h1>Bienvenido: <?php  echo $_SESSION['usuario']?></h1>
    <a href="cerrar_sesion.php">Cerrar Sesión</a>

</body>
</html>