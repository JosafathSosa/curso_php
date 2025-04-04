
<?php 

setcookie('font-size', '30px', time() + 60 * 60 * 24 * 30, '/'); // 30 días

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookies seteada</h1>
    <a href="texto.php">Ve al texto</a>
</body>
</html>