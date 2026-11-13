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


if (!isset($_SESSION["usuari"]) || $_SESSION["rol"] != "admin") {
    header("Location: login.php");
    exit;
}


if (isset($_GET["eliminar"])) {
    foreach ($_SESSION["preguntes"] as $i => $p) {
        if ($p["id"] == $_GET["eliminar"]) {
            unset($_SESSION["preguntes"][$i]);
        }
    }
   
    $_SESSION["preguntes"] = array_values($_SESSION["preguntes"]);

    header("Location: admin.php");
    exit;
}
?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Administració</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <?php include "header.php"; ?>
    <main class="contenidor">
      <section class="panell">
        <div class="navegacio">
          <div>
            <h1>Gestió de preguntes</h1>
            <p class="subtitol">Banc de preguntes del Trivial</p>
          </div>
          <a class="btn" href="pregunta_formulari.php">+ Nova pregunta</a>
        </div>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Categoria</th>
              <th>Enunciat</th>
              <th>Accions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($_SESSION["preguntes"] as $p) { ?>
            <tr>
              <td><?php echo $p["id"]; ?></td>
              <td><?php echo $p["categoria"]; ?></td>
              <td><?php echo $p["pregunta"]; ?></td>
              <td>
                <a class="btn btn-sec" href="pregunta_formulari.php?id=<?php echo $p["id"]; ?>">Editar</a>
                <a class="btn btn-perill" type="button" href="admin.php?eliminar=<?php echo $p["id"]; ?>" >Eliminar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <p class="nota">
          Les accions són decoratives: VOSALTRES heu de programar el CRUD, la
          confirmació d'eliminació i la protecció del rol. 
        </p>
      </section>
    </main>
    <?php include "footer.php"; ?>
  </body>
</html>