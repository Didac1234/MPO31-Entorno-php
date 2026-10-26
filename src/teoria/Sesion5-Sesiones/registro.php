<?php
session_start();

if(isset($_POST['Nombre'])){
    $_SESSION['name'] =  $_POST['Nombre'];
}

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    $_SESSION['name'] = $_POST['Nombre']
}else{

    exit;
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
    
    <form action="index.php" method="post">
            <input type="text" name="Nombre" placeholder="Nombre completo" required>

            <input type="text" name="CONTRA" placeholder="Nombre completo" required>
            <button type="submit">Guardar Datos</button>
    </form>


</body>
</html>