
<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina 2</h1>
    <h3>Hola, la sesion de <?php echo $_SESSION['nombre']; ?></h3>

    <a href="cerrar.php">Cerrar Sesion</a>
</body>
</html>