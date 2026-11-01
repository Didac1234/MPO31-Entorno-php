<?php
session_start();
require "functions.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$libros = $_SESSION['libros'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex align-items-center mb-4">
            <?php if ($_SESSION['photo'] != "") { ?>
                <img src="<?php echo $_SESSION['photo']; ?>" width="50" height="50" class="rounded-circle me-3">
            <?php } ?>
            <h3 class="me-3">
                Hola, <?php echo $_SESSION['username']; ?>
                <?php if ($_SESSION['role'] == "admin") { echo "👑"; } ?>
            </h3>
            <a href="logout.php" class="btn btn-outline-secondary ms-auto">Cerrar sesión</a>
        </div>

        <?php if ($_SESSION['role'] == "admin") { ?>
            <a href="add_edit_book.php" class="btn btn-success mb-3">Agregar Nuevo Libro</a>
        <?php } ?>

        <div class="row">
            <?php foreach ($libros as $id => $libro) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $libro['imagen']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $libro['titulo']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $libro['autor']; ?></h6>
                            <p class="card-text"><?php echo $libro['descripcion']; ?></p>
                            <?php if ($_SESSION['role'] == "admin") { ?>
                                <a href="add_edit_book.php?id=<?php echo $id; ?>" class="btn btn-warning">Editar</a>
                                <a href="delete_book.php?id=<?php echo $id; ?>" class="btn btn-danger">Eliminar</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>