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
?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inici</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <?php include "header.php"; ?>
    <main class="contenidor">
      <section class="panell">
        <span class="etiqueta">Examen pràctic · PHP</span>
        <h1>Benvingut al Trivial</h1>
        <p class="subtitol">
          Una aplicació de preguntes de cultura general: quatre categories i
          vuit preguntes inicials.
        </p>
        <div class="grid">
          <div>
            <h2>Soc jugador</h2>
            <p>Registra't, inicia sessió i supera les preguntes una a una.</p>

            <a class="btn" href="registre.php">Crear compte</a>
            <a class="btn btn-sec" href="login.php">Ja tinc compte</a>
          </div>
          <div>
            <h2>Soc administrador</h2>
            <p>
              Gestiona el banc de preguntes: consulta, afegeix, edita i elimina.
            </p>
            <?php if(isset($_SESSION['usuari'])){
              if($_SESSION['usuari'] == "admin"){
             }  ?>
              <a class="btn btn-sec" href="admin.php">Ves al crud</a>
            <?php }else{?>
            <a class="btn btn-sec" href="admin.php">Veure exemple del CRUD</a>
            <?php }?>
          </div>
        </div>
        
      </section>
    </main>
    <?php include "footer.php"; ?>
  </body>
</html>