<?php
include 'pelicules.php';
include 'head.php';
?>

<div class="rejilla">
    <?php foreach ($pelis as $id => $peli) { ?>
        <div class="columna">
            <div class="tarjeta">
                <img src="<?php echo $peli['img']; ?>" class="imagen">
                <div class="cuerpo">
                    <h5><?php echo $peli['nom']; ?></h5>
                    <p>Horaris:</p>
                    <?php foreach ($peli['horaris'] as $hora) { ?>
                        <span class="etiqueta"><?php echo $hora; ?></span>
                    <?php } ?>
                </div>

                <div class="capa">
                    <h5 class="titulo"><?php echo $peli['nom']; ?></h5>
                    <p class="datos">avui, <?php echo date('d/m'); ?></p>
                    <?php foreach ($peli['horaris'] as $hora) { ?>
                        <span class="hora"><?php echo $hora; ?></span>
                    <?php } ?>
                    <br><br>
                    <a href="detall.php?id=<?php echo $id; ?>" class="boton blanco">VEURE MÉS DIES</a>
                    <div class="abajo">
                        <a href="trailer.php?id=<?php echo $id; ?>" class="boton">TRÀILER</a>
                        <a href="detall.php?id=<?php echo $id; ?>" class="boton">INFO</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php include 'foot.php'; ?>