<?php
session_start();
require_once "dades.php";

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

$posicio = -1;
if (isset($_GET["id"])) {
    foreach ($_SESSION["preguntes"] as $i => $p) {
        if ($p["id"] == $_GET["id"]) {
            $posicio = $i;
        }
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria = $_POST["categoria"];
    $enunciat = $_POST["pregunta"];
    $opcions = [
        $_POST["opcio_0"],
        $_POST["opcio_1"],
        $_POST["opcio_2"],
        $_POST["opcio_3"]
    ];
    $correcta =  $_POST["correcta"];

    if ($posicio != -1) {
    
        $_SESSION["preguntes"][$posicio]["categoria"] = $categoria;
        $_SESSION["preguntes"][$posicio]["pregunta"] = $enunciat;
        $_SESSION["preguntes"][$posicio]["opcions"] = $opcions;
        $_SESSION["preguntes"][$posicio]["correcta"] = $correcta;
    } else {
        
        $nouId = 1;
        foreach ($_SESSION["preguntes"] as $p) {
            if ($p["id"] >= $nouId) {
                $nouId = $p["id"] + 1;
            }
        }

        $_SESSION["preguntes"][] = [
            "id" => $nouId,
            "categoria" => $categoria,
            "pregunta" => $enunciat,
            "opcions" => $opcions,
            "correcta" => $correcta
        ];
    }

    header("Location: admin.php");
    exit;
}


$pregunta = [
    "categoria" => "",
    "pregunta" => "",
    "opcions" => ["", "", "", ""],
    "correcta" => 0
];
if ($posicio != -1) {
    $pregunta = $_SESSION["preguntes"][$posicio];
}
?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pregunta</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <?php include "header.php"; ?>
    <main class="contenidor">
      <section class="panell ample-mig">
        <h1>Crear o editar pregunta</h1>
        <p class="subtitol">
          El mateix formulari pot servir per a les dues operacions.
        </p>
        <form action="#" method="post">
          <label class="camp"
            >Categoria<select name="categoria" required>
              <option value="">Selecciona una categoria</option>
              <option <?php if ($pregunta["categoria"] == "Geografia") { echo "selected"; } ?>>Geografia</option>
              <option <?php if ($pregunta["categoria"] == "Història") { echo "selected"; } ?>>Història</option>
              <option <?php if ($pregunta["categoria"] == "Ciència i natura") { echo "selected"; } ?>>Ciència i natura</option>
              <option <?php if ($pregunta["categoria"] == "Art i cultura") { echo "selected"; } ?>>Art i cultura</option>
            </select></label
          ><label class="camp"
            >Enunciat<textarea
              name="pregunta"
              required
              placeholder="Escriu l'enunciat..."
            ><?php echo ($pregunta["pregunta"]); ?></textarea></label
          ><label class="camp"
            >Opció A<input type="text" name="opcio_0" value="<?php echo htmlspecialchars($pregunta["opcions"][0]); ?>" required /></label
          ><label class="camp"
            >Opció B<input type="text" name="opcio_1" value="<?php echo htmlspecialchars($pregunta["opcions"][1]); ?>" required /></label
          ><label class="camp"
            >Opció C<input type="text" name="opcio_2" value="<?php echo htmlspecialchars($pregunta["opcions"][2]); ?>" required /></label
          ><label class="camp"
            >Opció D<input type="text" name="opcio_3" value="<?php echo htmlspecialchars($pregunta["opcions"][3]); ?>" required /></label
          ><label class="camp"
            >Resposta correcta<select name="correcta" required>
              <option value="0" <?php if ($pregunta["correcta"] == 0) { echo "selected"; } ?>>A</option>
              <option value="1" <?php if ($pregunta["correcta"] == 1) { echo "selected"; } ?>>B</option>
              <option value="2" <?php if ($pregunta["correcta"] == 2) { echo "selected"; } ?>>C</option>
              <option value="3" <?php if ($pregunta["correcta"] == 3) { echo "selected"; } ?>>D</option>
            </select></label
          >
          <div class="accions">
            <button class="btn" type="submit">Guardar pregunta</button
            ><a class="btn btn-sec" href="admin.php">Cancel·lar</a>
          </div>
        </form>
      </section>
    </main>
    <?php include "footer.php"; ?>
  </body>
</html>