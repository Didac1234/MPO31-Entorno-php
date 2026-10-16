<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

header {
    background: linear-gradient(135deg, #4a90e2, #357abd);
    color: #ffffff;
    padding: 20px 40px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

header div {
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 20px;
}

header img {
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #ffffff;
    background-color: #ffffff;
}

header h1 {
    font-size: 26px;
    font-weight: normal;
}
</style>
<body>
    

<header>
    <div> <img src=" <?php echo $_POST["UrlImg"]   ?>" alt=""><h1> Bienvenido <?php   echo $_POST["Nombre"]     ?></h1>    </div>
</header>
    
</body>
</html>