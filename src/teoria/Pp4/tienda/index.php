<?php
include 'includes/funciones.php';


$nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : "";
$telefono = isset($_POST["Telefono"]) ? $_POST["Telefono"] : "";
$foto = isset($_POST["UrlImg"]) ? $_POST["UrlImg"] : "";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.sect {
    flex: 1;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 30px;
    padding: 40px 20px;
}

.tarjeta {
    background-color: #ffffff;
    width: 320px;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin: 0;
}

.foto {
    margin-bottom: 20px;
}

.foto img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #4a90e2;
}

.dato {
    margin-bottom: 15px;
    text-align: left;
}

.etiqueta {
    display: block;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
    color: #888888;
    margin-bottom: 4px;
}

.dato p {
    font-size: 18px;
    color: #333333;
    padding-bottom: 8px;
    border-bottom: 1px solid #e5e5e5;
}

.tabla {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.tabla table {
    border-collapse: collapse;
    min-width: 400px;
}

.tabla th,
.tabla td {
    padding: 10px 15px;
    text-align: left;
    border-bottom: 1px solid #e5e5e5;
}

.tabla th {
    background-color: #4a90e2;
    color: #ffffff;
    font-size: 14px;
    text-transform: uppercase;
}

footer {
    background-color: #333333;
    color: #ffffff;
    text-align: center;
    padding: 20px;
}
</style>



<body>

    <?php include 'includes/header.php'; ?>

    <div class="sect">
        <div>
            <?php muestraInfoContacto($nombre, $telefono, $foto); ?>
        </div>

        <div class="tabla">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                </tr>
                <?php echo generarTablaProductos($productos); ?>
            </table>
        </div>
    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>
</html>