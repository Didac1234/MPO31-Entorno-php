<?php

$numAl = rand(0, 100); 

echo($numAl);
$chivato  = 0;


?>

<?php for ($i = 1; $i <= $numAl; $i++): ?>
        <?php if($numAl % $i == 0):?>
            <div class =""> <?= $i?> </div>
            <?php $chivato++; ?>
        <?php endif; ?> 


    <?php endfor; ?>

    <?php if($chivato >= 2):?>
         <div class =""> Es primo </div>
         <?php else; ?> 
         <div>No es primo </div>
         <?php endif;?>

            