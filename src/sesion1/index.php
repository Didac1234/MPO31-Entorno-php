 
 <?php

    date_default_timezone_set('Europe/Madrid');
    $nombre = " Didac Guirao Martin ";
    $edad = 19;
    $hobbie = "futbol";
    $adjetivo = "mejor";
    $profe = " Albert ";
    $fecha = "21/09/2026";

    function miNombre($nombre) {
        echo'<h2>'.$nombre.'</h2>';
    }

    function miDate(){
        echo date("d/m/Y");
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<style>
    header{
    background-color: black;
    display: flex;
    gap: 140px;
    justify-content: center;
    align-items: center;
    height: 200px;
}
*{
    padding: 0px;
    margin: 0px;
    font-family: Arial, Helvetica, sans-serif;
}

#Titulo{
    color: white;
    padding-right: 20px;
    font-size: 35px;
}
section{
    display: flex;
    gap: 190px;
    align-items: center;
    justify-content: center;
    
    height: 609px;
}

#imagen{
    width: 300px;
}
#text{
   max-width: 600px;
    
}
#Nom{
     display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

footer{
    background-color: black;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap:5px;
    color:white;
    height: 130px;
}
</style>



<body>
    <header>

        <img id = "imagen "src=" https://www.fpllefia.com/images/logollefia_blanco.png" alt=""> '
        <h1 id = "Titulo" >
         <?php  
            echo ('Módulo 7 - Practica 1. Mi Primera aplicacion en PHP ');
        ?>
        </h1>

    </header>

    <section>

        <div id = "Nom">
            <img id = "imagen" src="https://png.pngtree.com/png-clipart/20240824/original/pngtree-icon-of-an-individual-person-in-a-circular-shape-with-orange-png-image_15836214.png" alt="">
            <?php  
            miNombre($nombre);
            ?>
        </div>
        <div>
             <?php  
    echo '<p id ="text"> Hola, soy ' . $nombre . '.<br>' .'Les escribo porque me encantaría formar parte de su equipo.<br><br>' .
'La verdad es que me flipa la programación. Me flipa pasar horas picando código, resolviendo problemas y viendo cómo una idea de mi cabeza se convierte en un proyecto real y funcional.<br>' .
     'Si le preguntan a mi profe ' . $profe . ', seguro les diría que soy el ' . $adjetivo . '. Siempre me tomo el aprendizaje en serio y le pongo muchas ganas a todo lo que hago.<br>' .
     'Cuando no estoy entre pantallas y código, me gusta dedicar mi tiempo libre a jugar a ' . $hobbie . '. Desconectar con estas aficiones me ayuda a despejar la mente y a volver con más creatividad y foco.<br>' .
     'Me encantaría tener la oportunidad de charlar un rato, conocernos mejor y contarles cómo puedo aportar mi energía al equipo. </p>';
     
            ?>

        </div>

       
        

    </section>
    

    <footer>
         <?php  
            miNombre($nombre);
            echo ('<p> La fecha de hoy es :  ' . miDate()  . '<p> ');
            ?>
    </footer>

 <?php
        phpInfo(); 

        ?>
    
</body>
</html>
