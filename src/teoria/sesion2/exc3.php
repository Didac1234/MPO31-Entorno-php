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


<?php 

$numAl = rand(0, 100); 
?>

<?php if ($numAl % 2 == 0): ?>
    <div class="parell"> <?= $numAl ?></div>
<?php else: ?>
    <div class="senar"> <?= $numAl ?></div>
<?php endif; ?>


    