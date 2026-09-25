<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>


<?php for ($i = 1; $i <= 11; $i++): ?>
    <div  class="color<?=$i ?> caja" >
        <h3>Tabla del <?= $i ?></h3>
        <?php for ($j = 1; $j <= 9; $j++): ?>
            <p><?= $i ?> x <?= $j ?> = <?= $i * $j ?></p>
        <?php endfor; ?>
    </div>
<?php endfor; ?>