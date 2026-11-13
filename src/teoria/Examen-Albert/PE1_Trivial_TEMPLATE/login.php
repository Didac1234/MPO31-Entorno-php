<?php
session_start();
require "dades.php";

if (!isset($_SESSION["categories"])) {
    $_SESSION["categories"] = $categories;
}
if (!isset($_SESSION["preguntes"])) {
    $_SESSION["preguntes"] = $preguntes;
}
if (!isset($_SESSION["usuaris"])) {
    $_SESSION["usuaris"] = $usuaris;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuari = $_POST["usuari"];
    $password = $_POST["password"];

    foreach ($_SESSION["usuaris"] as $u) {
        if ($u["usuari"] == $usuari && password_verify($password, $u["password"])) {
            $_SESSION["id"] = $u["id"];
            $_SESSION["usuari"] = $u["usuari"];
            $_SESSION["rol"] = $u["rol"];

            if ($u["rol"] == "admin") {
                header("Location: admin.php");
            } else {
                header("Location: joc.php");
            }
            exit;
        }
    }

    $error = "Usuari o contrasenya incorrectes";
}

?>

<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
        <!-- AQUEST HEADER HA DE SER REUTILITZABLE -->

      <?php
      include 'header.php'
      ?>
    <main class="contenidor">
      <section class="panell ample-mig">
        <h1>Iniciar sessió</h1>
        <p class="subtitol">Accedeix com a jugador o administrador.</p>
        <form action="#" method="post">
          <label class="camp"
            >Nom d'usuari<input name="usuari" type="text" required /></label
          ><label class="camp"
            >Contrasenya<input
              name="password"
              type="password"
              required /></label
          ><button class="btn" type="submit">Entrar</button>
        </form>
        <p class="nota">
          La versió PHP ha de verificar la contrasenya i redirigir segons el
          rol.
        </p>
      </section>
    </main>
    <?php
    include 'footer.php'
    ?>
  </body>
</html>
