<?php
require '../Basuras.php';



if (!isset($_SESSION['aciertos'])) {
    $_SESSION['aciertos'] = [];
    foreach ($_SESSION['contenedores'] as $color => $nombre) {
        $_SESSION['aciertos'][$color] = 0;
    }
}


if (!isset($_SESSION['actual'])) {
    $_SESSION['actual'] = array_rand($_SESSION['camion']);
}


if (isset($_GET['color'])) {
     $actual = $_SESSION['actual'];

    if ($_GET['color'] == $_SESSION['camion'][$actual]['contenedor']) {
        $_SESSION['aciertos'][$_GET['color']]++;
         $_SESSION['actual'] = array_rand($_SESSION['camion']);
    }else{
        echo ("Prueba otra vez");
    }

   
   
}

$total = 0;

foreach ($_SESSION['aciertos'] as $acierto) {
    $total = $total + $acierto;
}

if($_SESSION['aciertos'] == 28){
    session_destroy();
    header("Location: /Teoria/Pp6-Extra/contenedores/carton.php");
exit();
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenedor de Basuras</title>
    <style>
        header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .contenedor {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            gap: 20px;
        }
    </style>
</head>

<body>

    <?php include '../include/header.php'; ?>

    <div class="container mt-4" style="max-width: 600px;">
        <h2>Contenedor de Basuras</h2>
       <p>Contenido de Basuras <?php echo $total; ?></p>

        <form class="contenedor">
            <button name="color" value="rojo"><img src="../imagenes/rojo.png" alt="Contenedor rojo"></button>
            <button name="color" value="amarillo"><img src="../imagenes/amarillo.png" alt="Contenedor amarillo"></button>
            <button name="color" value="verde"><img src="../imagenes/verde.png" alt="Contenedor verde"></button>
            <button name="color" value="azul"><img src="../imagenes/azul.png" alt="Contenedor azul"></button>
        </form>

        <div>
            <p>
                El producto seleccionado es: <?php echo $_SESSION['camion'][$_SESSION['actual']]['producto']; ?>
            </p>
        </div>

        <table>
            <?php
            foreach ($_SESSION['contenedores'] as $color => $nombre) {
                echo "<tr>";
                echo "<td>" . $nombre . "</td>";
                echo "<td>" . $_SESSION['aciertos'][$color] . "/7</td>";
                echo "</tr>";
            }
            ?>
        </table>



        <a href="../reiniciar-camion.php">
    <button>Vaciar Camión</button>
</a>

    </div>

    <?php include '../include/footer.php'; ?>
</body>
</html>