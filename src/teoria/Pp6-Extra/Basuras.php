<?php
session_start();

$_SESSION['camion'] = [

    ["id" => 1, "producto" => "papel de cartón", "contenedor" => "azul"],
    ["id" => 2, "producto" => "papel de aluminio", "contenedor" => "amarillo"],
    ["id" => 3, "producto" => "papel de cocina", "contenedor" => "rojo"],
    ["id" => 4, "producto" => "papel de periódico", "contenedor" => "azul"],
    ["id" => 5, "producto" => "papel de revista", "contenedor" => "azul"],
    ["id" => 6, "producto" => "papel de cartón", "contenedor" => "azul"],
    ["id" => 7, "producto" => "papel de oficina", "contenedor" => "azul"],
    ["id" => 8, "producto" => "papel de regalo", "contenedor" => "azul"],
    ["id" => 9, "producto" => "papel de seda", "contenedor" => "azul"],
    ["id" => 10, "producto" => "papel de lija", "contenedor" => "rojo"]

];


$_SESSION['contenedores'] = [
    "rojo" => "Contenedor Rojo",
    "amarillo" => "Contenedor Amarillo",
    "verde" => "Contenedor Verde",
    "azul" => "Contenedor Azul"
];
?>
    

