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

$asignatures = 24;
$edat = 24;

if($asignatures <= 10){
    echo ("Suspendido");

}else{
    echo("Has aprobado");
}

?>


<?php if($edat >= 18):?>
<p>Eres mayor de edad</p>
<?php else:?>
    <p>Eres menor </p>
    <?php endif ;?>


<?php 

    $bolita = 36;
  

    if($bolita == 0 ){

    echo("ha caido en el 0");

    }else if( $bolita % 2 != 0 ){
        echo("Es impar");
    }else if( $bolita % 2 == 0){
        echo("Es par ");
    }

    $lista = [1,2,3,4,5,6,7,8,9,];

    foreach($lista as $elemento){
        echo ($elemento);
    }


?>






    














?>








