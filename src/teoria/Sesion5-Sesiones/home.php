<?php
session_start();

if (!isset($_SESSION['name'])) {
    header('Location: login.php');
    exit;
}

echo 'Bienvenido';

$_SESSION['alumnes'] = ['joa', 'miguel', 'Pedri', 'lamine'];

array_push($_SESSION['alumnes'], 'jonatan');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Cerrar sesión</a>

    <pre>
        <?php var_dump($_SESSION['alumnes']); ?>
    </pre>
</body>
</html>
