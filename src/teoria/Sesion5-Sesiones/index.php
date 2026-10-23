<?php

session_start();

echo 'hola ssesion';


$_SESSION['edad'] = 19;


echo $_SESSION['edad'];

echo $_SESSION['name'];


?>