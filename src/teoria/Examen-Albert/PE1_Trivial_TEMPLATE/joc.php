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

if (!isset($_SESSION["usuari"])) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION["puntuacio"])) {
    $_SESSION["puntuacio"] = 0;
}
if (!isset($_SESSION["actual"])) {
    $_SESSION["actual"] = 0;
}

if (isset($_GET["reiniciar"])) {
    $_SESSION["puntuacio"] = 0;
    $_SESSION["actual"] = 0;
    header("Location: joc.php");
    exit;
}

$total = count($_SESSION["preguntes"]);

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["actual"] < $total) {
    $pregunta = $_SESSION["preguntes"][$_SESSION["actual"]];

    if ($_POST["resposta"] == $pregunta["correcta"]) {
        $_SESSION["puntuacio"]++;
        $_SESSION["missatge"] = "Correcte! Has guanyat 1 punt.";
    } else {
        $_SESSION["missatge"] = "Incorrecte. La resposta correcta era: " . $pregunta["opcions"][$pregunta["correcta"]];
    }

    $_SESSION["actual"]++;
    header("Location: joc.php");
    exit;
}
?>
<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Trivial</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <?php include "header.php"; ?>
    <main class="contenidor">
      <section class="panell">
        <h1>Hola, <?php echo $_SESSION["usuari"]; ?>!</h1>
        <p class="subtitol">Respon la pregunta i continua avançant.</p>
        <div class="estadistiques">
          <span><strong>Puntuació:</strong> <?php echo $_SESSION["puntuacio"]; ?> punts</span
          ><span><strong>Progrés:</strong> <?php echo min($_SESSION["actual"] + 1, $total); ?> de <?php echo $total; ?></span
          ><span><strong>Pendents:</strong> <?php echo $total - $_SESSION["actual"]; ?></span>
        </div>
        <?php if ($_SESSION["actual"] < $total) {
            $pregunta = $_SESSION["preguntes"][$_SESSION["actual"]];
        ?>
        <span class="etiqueta"><?php echo $pregunta["categoria"]; ?></span>
        <h2 style="margin-top: 15px">
          <?php echo $pregunta["pregunta"]; ?>
        </h2>
        <form method="post" action="#">
          <?php foreach ($pregunta["opcions"] as $i => $opcio) { ?>
          <label class="resposta"
            ><input
              type="radio"
              name="resposta"
              value="<?php echo $i; ?>"
              required
            /><?php echo $opcio; ?></label
          >
          <?php } ?>
          <button class="btn" type="submit">Comprovar resposta</button>
        </form>
        <?php } else { ?>
        <h2 style="margin-top: 15px">
          Has acabat! Puntuació final: <?php echo $_SESSION["puntuacio"]; ?> de <?php echo $total; ?>
        </h2>
        <a class="btn" href="joc.php?reiniciar=1">Tornar a jugar</a>
        <?php } ?>
        <?php if (isset($_SESSION["missatge"])) { ?>
        <div class="alerta">
          <?php echo $_SESSION["missatge"]; ?>
        </div>
        <?php unset($_SESSION["missatge"]); ?>
        <?php } ?>
        <p class="nota">
          La pregunta, la puntuació i el progrés són dades fictícies. La versió
          PHP ha d'obtenir-les de la sessió.
        </p>
      </section>
    </main>
    <?php include "footer.php"; ?>
  </body>
</html>