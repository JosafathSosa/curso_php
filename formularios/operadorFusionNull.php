<?php 

//$nombre = isset($_GET['name']) ? $_GET['name'] : 'Anonimo'; // Almacena el valor del campo 'name' en la variable $nombre

$nombre = $_GET['name'] ?? 'Anonimo'; // Almacena el valor del campo 'name' en la variable $nombre, si no existe asigna 'Anonimo'

echo "Hola $nombre"; // Muestra un mensaje con el nombre

?>