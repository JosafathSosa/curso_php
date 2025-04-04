<?php 

print_r($_POST); // Muestra el contenido del array $_POST

if ($_POST) { // Verifica si el formulario ha sido enviado
    $nombre = $_POST['name']; // Almacena el valor del campo 'name' en la variable $nombre
$sexo = $_POST['sex'];
$year = $_POST['year'];

echo "<br> Hola $nombre, eres $sexo y naciste en el año $year"; // Muestra un mensaje con los valores recibidos
}else{
    header("Location: index.php"); // Redirige a index.php si no se ha enviado el formulario
}



?>