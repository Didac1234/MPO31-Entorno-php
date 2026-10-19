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
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --verde: #00a145;
    --verde-oscuro: #006b30;
    --verde-claro: #eaf7ef;
    --rojo: #e2001a;
    --fondo: #f3f6f4;
    --borde: #e3e8e5;
    --texto: #1f2a24;
    --texto-suave: #7a8780;
    --sombra: 0 10px 30px rgba(0, 107, 48, 0.12);
}

body {
    font-family: "Poppins", Arial, sans-serif;
    background: linear-gradient(180deg, #e8f5ed 0%, var(--fondo) 300px);
    color: var(--texto);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* ---------- Cabecera ---------- */
header,
nav {
    background: linear-gradient(90deg, var(--verde-oscuro), var(--verde));
    color: #ffffff;
    padding: 18px 40px;
    font-weight: 600;
    font-size: 20px;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 16px rgba(0, 107, 48, 0.3);
}

header a,
nav a {
    color: #ffffff;
    text-decoration: none;
    margin-right: 24px;
    font-weight: 500;
    opacity: 0.9;
    transition: opacity 0.2s;
}

header a:hover,
nav a:hover {
    opacity: 1;
    text-decoration: underline;
}

/* ---------- Contenido ---------- */
.sect {
    flex: 1;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 32px;
    padding: 50px 24px;
}

/* ---------- Tarjeta de contacto ---------- */
.tarjeta {
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    width: 330px;
    padding: 0 0 30px;
    border-radius: 20px;
    box-shadow: var(--sombra);
    text-align: center;
    margin: 0;
    transition: transform 0.3s, box-shadow 0.3s;
}

.tarjeta:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(0, 107, 48, 0.2);
}

.tarjeta::before {
    content: "";
    display: block;
    height: 100px;
    background: linear-gradient(135deg, var(--verde-oscuro), var(--verde));
}

.foto {
    margin-top: -75px;
    margin-bottom: 24px;
    position: relative;
}

.foto img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #ffffff;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    background-color: var(--verde-claro);
}

.dato {
    margin: 0 30px 18px;
    text-align: left;
}

.etiqueta {
    display: block;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    color: var(--verde);
    margin-bottom: 4px;
}

.dato p {
    font-size: 17px;
    font-weight: 500;
    color: var(--texto);
    padding-bottom: 8px;
    border-bottom: 2px solid var(--verde-claro);
}

/* ---------- Tabla de productos ---------- */
.tabla {
    background-color: #ffffff;
    border-radius: 20px;
    box-shadow: var(--sombra);
    overflow: hidden;
}

.tabla table {
    border-collapse: collapse;
    min-width: 480px;
    width: 100%;
}

.tabla th {
    background: linear-gradient(90deg, var(--verde-oscuro), var(--verde));
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 18px 22px;
    text-align: left;
}

.tabla td {
    padding: 16px 22px;
    text-align: left;
    font-size: 15px;
    border-bottom: 1px solid var(--borde);
    transition: background-color 0.2s;
}

.tabla tr:last-child td {
    border-bottom: none;
}

.tabla tr:nth-child(even) td {
    background-color: #fafcfb;
}

.tabla tr:hover td {
    background-color: var(--verde-claro);
}

/* Precio */
.tabla td:nth-child(2) {
    font-weight: 700;
    color: var(--verde-oscuro);
    white-space: nowrap;
}

/* Disponibilidad */
.tabla td:nth-child(3) {
    font-weight: 500;
    color: var(--texto-suave);
}

/* ---------- Footer ---------- */
footer {
    background: linear-gradient(90deg, var(--verde-oscuro), #004d22);
    color: #ffffff;
    text-align: center;
    padding: 26px;
    font-size: 14px;
    letter-spacing: 0.3px;
}

footer a {
    color: #ffffff;
    opacity: 0.85;
}

footer a:hover {
    opacity: 1;
}

/* ---------- Móvil ---------- */
@media (max-width: 860px) {
    .sect {
        flex-direction: column;
        align-items: center;
        padding: 30px 16px;
    }

    .tabla {
        width: 100%;
        overflow-x: auto;
    }

    .tabla table {
        min-width: 0;
    }

    header,
    nav {
        padding: 16px 20px;
    }
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