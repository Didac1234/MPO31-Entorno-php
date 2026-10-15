<?php
include 'pelicules.php';
$id = $_GET['id'];
$peli = $pelis[$id];
$url = $peli['trailer'] . '?autoplay=1&mute=1';
include 'head.php';
?>

<h2 class="titulo"><?php echo $peli['nom']; ?></h2>

<div class="video">
    <iframe src="<?php echo $url; ?>" allow="autoplay" allowfullscreen></iframe>
</div>

<div class="centro">
    <a href="index.php" class="boton">Tornar a la cartellera</a>
</div>

<?php include 'foot.php'; ?>