<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Verifica si el formulario ha sido enviado con el método POST
    echo "Los datos se enviaron por post";
}elseif ($_SERVER['REQUEST_METHOD'] == 'GET') { // Verifica si el formulario ha sido enviado con el método GET
    echo "Los datos se enviaron por get";
}
?>