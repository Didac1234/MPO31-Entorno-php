<?php
$foto = isset($_POST["UrlImg"]) ? $_POST["UrlImg"] : "";
include 'includes/header.php';
include 'includes/footer.php';
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
    
   
    

}

.tarjeta {
    background-color: #ffffff;
    width: 320px;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin: 40px auto;
    
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

</style>



<body>


    

    <div class="tarjeta">
        <div class="foto">
            <img src="<?php echo $foto ?>" alt="Foto de perfil">
        </div>

        <div class="dato">
            <span class="etiqueta">Nombre</span>
            <?php if (isset($_POST["Nombre"])) {
                echo "<p>" . $_POST["Nombre"] . "</p>";
            } ?>
        </div>

        <div class="dato">
            <span class="etiqueta">Teléfono</span>
            <?php if (isset($_POST["Telefono"])) {
                echo "<p>" . $_POST["Telefono"] . "</p>";
            } ?>
        </div>
    </div>

</body>
</html>