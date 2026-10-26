<?php
session_start();

$user = 'Didac';
$contra1 = password_hash('12345',PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['Nombre'] ?? '';
    $contra = $_POST['Contra'] ?? '';

    if ($nombre === $user && password_verify($contra,$contra1)) {

        $_SESSION['name'] = $nombre;
        $_SESSION['cont'] = $contra;

        header('Location: home.php');
        exit;

    } else {
        echo 'Usuario o contraseña incorrectos';
    }
}
?>

<form action="" method="post">
    <input type="text" name="Nombre"
           placeholder="Nombre completo" required>

    <input type="password" name="Contra"
           placeholder="Contraseña" required>

    <button type="submit">Iniciar sesión</button>
</form>
