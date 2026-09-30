<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minijuegos - Sesión 2</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            max-width: 600px;
            width: 100%;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
        }

        .game-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .game-card {
            display: block;
            padding: 15px 20px;
            background-color: #4a90e2;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .game-card:hover {
            background-color: #357abd;
            transform: translateY(-2px);
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #666;
            text-decoration: none;
            font-size: 0.9em;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>🎮 Menú de Minijuegos</h1>
        <p>Selecciona un ejercicio para comenzar:</p>
        
        <div class="game-list">
            <a href="exc1.php" class="game-card">Ejercicio 1</a>
            <a href="exc2.php" class="game-card">Ejercicio 2</a>
            <a href="exc3.php" class="game-card">Ejercicio 3</a>
            <a href="exc4.php" class="game-card">Ejercicio 4</a>
            <a href="exc5.php" class="game-card">Ejercicio 5</a>
        </div>

        <a href="index.php" class="back-link">← Volver al inicio</a>
    </div>

</body>
</html>