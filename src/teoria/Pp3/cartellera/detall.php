<?php
include 'pelicules.php';
$id = $_GET['id'];
$peli = $pelis[$id];
include 'head.php';
?>

<a href="index.php" class="boton">Tornar a la cartellera</a>

<div class="fila">
    <div class="parte4">
        <img src="<?php echo $peli['img']; ?>" class="imagen">
    </div>
    <div class="parte8">
        <h2><?php echo $peli['nom']; ?> <span class="etiqueta"><?php echo $peli['qualificacio']; ?></span></h2>

        <?php if ($id == 10) { ?>
            <p class="estrellas">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $peli['valoracio']) {
                        echo '★';
                    } else {
                        echo '☆';
                    }
                }
                ?>
            </p>
        <?php } ?>

        <p><?php echo $peli['sinopsi']; ?></p>
        <p><b>Gènere:</b> <?php echo $peli['genere']; ?></p>
        <p><b>Durada:</b> <?php echo $peli['durada']; ?></p>
        <p><b>Director:</b> <?php echo $peli['director']; ?></p>
        <p><b>Repartiment:</b> <?php echo $peli['repartiment']; ?></p>

        <h5>Horaris</h5>
        <?php foreach ($peli['horaris'] as $hora) { ?>
            <span class="etiqueta"><?php echo $hora; ?></span>
        <?php } ?>

        <?php if ($id == 10) { ?>
            <div id="carrusel" class="bloque" >
                
                <button class="anterior" type="button" >
                    <span class="icono"></span>
                </button>
                <button class="siguiente" type="button" >
                    <span class="icono"></span>
                </button>
            </div>
        <?php } ?>

        <br>
        <a href="trailer.php?id=<?php echo $id; ?>" class="boton">Veure tràiler</a>
    </div>
</div>

<?php include 'foot.php'; ?>