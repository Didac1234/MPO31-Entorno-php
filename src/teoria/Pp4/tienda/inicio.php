<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    background-color: #f1f5f3;
    background-image: 
        radial-gradient(at 20% 20%, rgba(0, 160, 73, 0.08) 0px, transparent 40%),
        radial-gradient(at 80% 80%, rgba(0, 82, 37, 0.08) 0px, transparent 40%);
    background-attachment: fixed;
    color: #0f1e16;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}


h1 {
    color: #0f1e16;
    margin-bottom: 24px;
    font-size: 1.8rem;
    font-weight: 800;
    letter-spacing: -0.02em;
    text-align: center;
}


form {
    background-color: #ffffff;
    padding: 36px 30px;
    border-radius: 20px;
    box-shadow: 0 12px 32px rgba(0, 102, 46, 0.08);
    border: 1px solid #e1e9e4;
    width: 100%;
    max-width: 380px;
    display: flex;
    flex-direction: column;
    gap: 18px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

form:hover {
    transform: translateY(-2px);
    box-shadow: 0 16px 40px rgba(0, 102, 46, 0.12);
}


form input[type="text"],
form input[type="number"],
form input[type="url"] {
    width: 100%;
    padding: 14px 16px;
    border: 1.5px solid #d4dfd8;
    border-radius: 12px;
    font-size: 0.95rem;
    font-family: inherit;
    color: #0f1e16;
    background-color: #fafcfb;
    outline: none;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
}

form input::placeholder {
    color: #8fa195;
    font-size: 0.9rem;
}


form input[type="text"]:focus,
form input[type="number"]:focus,
form input[type="url"]:focus {
    border-color: #00a049;
    background-color: #ffffff;
    box-shadow: 0 0 0 4px rgba(0, 160, 73, 0.15);
}


form button[type="submit"] {
    background: linear-gradient(135deg, #009946 0%, #00662e 100%);
    color: #ffffff;
    padding: 14px;
    border: none;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: 0.02em;
    cursor: pointer;
    transition: all 0.25s ease;
    margin-top: 8px;
    box-shadow: 0 4px 12px rgba(0, 102, 46, 0.2);
}

form button[type="submit"]:hover {
    background: linear-gradient(135deg, #00b352 0%, #007a37 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(0, 102, 46, 0.3);
}

form button[type="submit"]:active {
    transform: translateY(0);
}
</style>
<body>

   

    <main class="form-container">
        <h1 class="form-title">Ingresar Datos</h1>

        <form action="index.php" method="post">
            <input type="text" name="Nombre" placeholder="Nombre completo" required>
            <input type="number" name="Telefono" placeholder="Número de teléfono" required>
            <input type="url" name="UrlImg" placeholder="URL de la imagen de perfil" required>

            <button type="submit">Guardar Datos</button>
        </form>
    </main>

    

</body>
</html>