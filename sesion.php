<?php

session_start();

echo 'Bienvenido a la página #1';

$_SESSION['color']  = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['time']   = time();

// Trabajar si la cookie de sesión fue aceptada
echo '<br /><a href="pagina2.php">página 2</a>';


