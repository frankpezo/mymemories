<?php
//Hacemos la conexión a la bd
require 'conexion.php';
$conexion=BD::conexion();
//1.  Para mostrar las fotos por páginas
$fotos_por_pagina=8;

//3.1. 
$pagina_actual= (isset($_GET['p']) ? (int)$_GET['p'] :  1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;


//2. Traemos las fotos de la BD
$statement = $conexion->prepare(
    "SELECT SQL_CALC_FOUND_ROWS * FROM fotosnormal LIMIT $inicio, $fotos_por_pagina "
);

$statement->execute();
$fotos= $statement->fetchAll();

if(!$fotos){//SI NO HAY FOTOS
    header('Location: index.php');
}
//Calcular el número de foto para calcular la cantidad de páginas
$statement = $conexion->prepare(
    "SELECT FOUND_ROWS()as total_filas"
);

$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas =ceil($total_post/$fotos_por_pagina);




require 'views/normal.view.php';
?>