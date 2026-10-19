<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- En tu header.php asegurate de tenerlo así -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

/* ==========================================================================
   RESET & VARIABLES
   ========================================================================== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    /* Colores Principales (Mercadona Modern Green) */
    --brand-primary: #00a049;
    --brand-dark: #00662e;
    --brand-accent: #00c853;
    --brand-gradient: linear-gradient(135deg, #008f41 0%, #005225 100%);
    
    /* Neutros y Fondos */
    --bg-body: #f1f5f3;
    --surface-card: #ffffff;
    --text-title: #0f1e16;
    --text-body: #33473b;
    --text-muted: #708577;
    --border-subtle: #e1e9e4;
    
    /* Sombras y Efectos */
    --shadow-soft: 0 10px 30px -5px rgba(0, 102, 46, 0.08);
    --shadow-hover: 0 20px 40px -10px rgba(0, 102, 46, 0.18);
    --radius-main: 20px;
    --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
}

body {
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    background-color: var(--bg-body);
    background-image: 
        radial-gradient(at 0% 0%, rgba(0, 160, 73, 0.06) 0px, transparent 50%),
        radial-gradient(at 100% 100%, rgba(0, 82, 37, 0.08) 0px, transparent 50%);
    background-attachment: fixed;
    color: var(--text-body);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* ==========================================================================
   HEADER (Tus datos de bienvenida e imagen)
   ========================================================================== */
header {
    background: var(--brand-gradient);
    color: #ffffff;
    padding: 24px 32px;
    box-shadow: 0 8px 30px rgba(0, 82, 37, 0.25);
    position: relative;
    z-index: 10;
}

header div {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 20px;
}

header img {
    width: 65px;
    height: 65px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid rgba(255, 255, 255, 0.9);
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.2);
    background-color: rgba(255, 255, 255, 0.1);
}

header h1 {
    font-size: 1.6rem;
    font-weight: 700;
    letter-spacing: -0.02em;
    color: #ffffff;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
}

/* ==========================================================================
   CONTENIDO PRINCIPAL (.sect)
   ========================================================================== */
.sect {
    flex: 1;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 36px;
    max-width: 1100px;
    margin: 0 auto;
    width: 100%;
    padding: 50px 24px;
}

/* ==========================================================================
   TARJETA DE PERFIL
   ========================================================================== */
.tarjeta {
    background: var(--surface-card);
    width: 320px;
    border-radius: var(--radius-main);
    box-shadow: var(--shadow-soft);
    border: 1px solid var(--border-subtle);
    overflow: hidden;
    transition: var(--transition);
}

.tarjeta:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-hover);
}

.tarjeta::before {
    content: "";
    display: block;
    height: 100px;
    background: var(--brand-gradient);
}

.foto {
    margin-top: -55px;
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
}

.foto img {
    width: 110px;
    height: 110px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid var(--surface-card);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
    background-color: var(--bg-body);
}

.dato {
    padding: 0 28px;
    margin-bottom: 18px;
}

.etiqueta {
    display: block;
    font-size: 0.7rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--brand-primary);
    margin-bottom: 4px;
}

.dato p {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-title);
    padding-bottom: 8px;
    border-bottom: 1px dashed var(--border-subtle);
}

/* ==========================================================================
   TABLA DE PRODUCTOS
   ========================================================================== */
.tabla {
    flex: 1;
    background: var(--surface-card);
    border-radius: var(--radius-main);
    box-shadow: var(--shadow-soft);
    border: 1px solid var(--border-subtle);
    overflow: hidden;
}

.tabla table {
    width: 100%;
    border-collapse: collapse;
}

.tabla th {
    background: #f8faf9;
    color: var(--text-muted);
    font-size: 0.75rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 18px 24px;
    text-align: left;
    border-bottom: 1px solid var(--border-subtle);
}

.tabla td {
    padding: 16px 24px;
    font-size: 0.95rem;
    color: var(--text-title);
    border-bottom: 1px solid var(--border-subtle);
    transition: var(--transition);
}

.tabla tr:last-child td {
    border-bottom: none;
}

.tabla tr:hover td {
    background-color: #f0f9f4;
}

/* Precios */
.tabla td:nth-child(2) {
    font-weight: 700;
    color: var(--brand-dark);
}

/* Disponibilidad */
.tabla td:nth-child(3) {
    color: var(--text-muted);
    font-size: 0.88rem;
}

/* ==========================================================================
   FOOTER
   ========================================================================== */
footer {
    background: #0a1810;
    color: #a3b8ac;
    padding: 24px 40px;
    text-align: center;
    font-size: 0.88rem;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    margin-top: auto;
}

footer span {
    font-weight: 500;
    letter-spacing: 0.02em;
}

/* ==========================================================================
   RESPONSIVE
   ========================================================================== */
@media (max-width: 820px) {
    header div {
        justify-content: center;
        text-align: center;
        flex-direction: column;
        gap: 12px;
    }

    .sect {
        flex-direction: column;
        align-items: center;
        padding: 30px 16px;
    }

    .tarjeta {
        width: 100%;
        max-width: 380px;
    }

    .tabla {
        width: 100%;
        overflow-x: auto;
    }
}
</style>
<body>
    

<header>
    <div> <img src=" <?php echo $_POST["UrlImg"]   ?>" alt=""><h1> Bienvenido <?php   echo $_POST["Nombre"]     ?></h1>    </div>
</header>
    
</body>
</html>