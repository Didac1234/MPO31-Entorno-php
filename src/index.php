<?php
$temp = 40;

echo ($temp);
echo "<h2>Hola daw2 estamos a $temp Grados </h2>";

if (isset($_POST["Nombre"])) {
    echo "<p>Hola " . $_POST["Nombre"] . "</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="Post">
        <input type="text" name="Nombre">

        <button>Submit</button>
    </form>
</body>
</html>