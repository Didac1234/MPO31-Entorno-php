<?php







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f6;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}


h1 {
    color: #333333;
    margin-bottom: 20px;
    font-size: 1.8rem;
}


form {
    background-color: #ffffff;
    padding: 30px 25px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 350px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    gap: 15px;
}


form input[type="text"],
form input[type="number"],
form input[type="url"] {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #cccccc;
    border-radius: 6px;
    font-size: 0.95rem;
    box-sizing: border-box;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    outline: none;
}


form input[type="text"]:focus,
form input[type="number"]:focus,
form input[type="url"]:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}


form button[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    padding: 12px;
    border: none;
    border-radius: 6px;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 10px;
}


form button[type="submit"]:hover {
    background-color: #0056b3;
}
</style>
<body>

    <h1> Formulario </h1>

    <form action="index.php" method="post">
    <input type="text" name="Nombre">
    <input type="number" name="Telefono">
    <input type="url" name="UrlImg">

    <button type="submit">Submit</button>
</form>
    
</body>
</html>