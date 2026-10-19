<?php

include __DIR__ . '/../data/productos.php';
$foto = isset($_POST["UrlImg"]) ? $_POST["UrlImg"] : "";


function generarTablaProductos($productos) {
    $filas = "";

    foreach ($productos as $producto) {
    $precio = number_format((float)$producto["Precio"], 2, ",", ".");

        if ($producto["Disponibilidad"] == true) {
            $filas .= "<tr>";
            $filas .= "<td>" . ($producto["Nombre"]) . "</td>";
            $filas .= "<td>" . $precio . "€</td>";
            $filas .= "<td>En stock</td>";
            $filas .= "</tr>";
        } else {
            $filas .= "<tr style='color: red;'>";
            $filas .= "<td>" . ($producto["Nombre"]) . "</td>";
            $filas .= "<td>" . $precio . "€</td>";
            $filas .= "<td>Agotado</td>";
            $filas .= "</tr>";
        }
    }

    return $filas;
}
?>







<?php
function muestraInfoContacto($nombre, $telefono, $foto){ ?>

    <div class="tarjeta">
        <div class="foto">
            <img src="<?php echo $foto ?>" alt="Foto de perfil">
        </div>

        <div class="dato">
            <span class="etiqueta">Nombre</span>
            <p><?php echo $nombre ?></p>
        </div>

        <div class="dato">
            <span class="etiqueta">Teléfono</span>
            <p><?php echo $telefono ?></p>
        </div>
    </div>

<?php } ?>













