<?php
session_start();
session_destroy();
header("Location: /Teoria/Pp6-Extra/contenedores/carton.php");
exit();
?>