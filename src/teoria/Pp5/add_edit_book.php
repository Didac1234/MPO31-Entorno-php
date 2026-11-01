<?php
session_start();
require "functions.php";

if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("Location: home.php");
    exit();
}

$titulo = "";
$autor = "";
$imagen = "";
$descripcion = "";
$error = "";
$id = "";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['libros'][$id])) {
        $titulo = $_SESSION['libros'][$id]['titulo'];
        $autor = $_SESSION['libros'][$id]['autor'];
        $imagen = $_SESSION['libros'][$id]['imagen'];
        $descripcion = $_SESSION['libros'][$id]['descripcion'];
    }
}

if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];

    if ($titulo == "" || $autor == "") {
        $error = "El título y el autor no pueden estar vacíos";
    } else {
        if ($id !== "") {
            editarLibro($id, $titulo, $autor, $imagen, $descripcion);
        } else {
            agregarLibro($titulo, $autor, $imagen, $descripcion);
        }
        header("Location: home.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar / Editar libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4" style="max-width: 600px;">
        <h2><?php if ($id !== "") { echo "Editar libro"; } else { echo "Agregar libro"; } ?></h2>
        <?php if ($error != "") { ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="<?php echo $titulo; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Autor</label>
                <input type="text" name="autor" class="form-control" value="<?php echo $autor; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Imagen (URL)</label>
                <input type="text" name="imagen" class="form-control" value="<?php echo $imagen; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control"><?php echo $descripcion; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="home.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>