<?php
session_start();

$usuarios = [
    ["username" => "admin", "password" => "adminpass", "role" => "admin"],
    ["username" => "reader", "password" => "readerpass", "role" => "lector"]
];

$error = "";

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $photo = $_POST['photo'];

    foreach ($usuarios as $usuario) {
        if ($usuario['username'] == $username && $usuario['password'] == $password) {
            $_SESSION['username'] = $usuario['username'];
            $_SESSION['role'] = $usuario['role'];
            $_SESSION['photo'] = $photo;
            header("Location: home.php");
            exit();
        }
    }
    $error = "Usuario o contraseña incorrectos";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5" style="max-width: 400px;">
        <h2>Iniciar sesión</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">URL de la foto de perfil</label>
                <input type="text" name="photo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <?php if ($error != "") { ?>
            <div class="alert alert-danger mt-3"><?php echo $error; ?></div>
        <?php } ?>
    </div>
</body>
</html>