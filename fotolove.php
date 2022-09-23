<?php
//Hacemos la conexión a la bd
require 'conexion.php';
$conexion=BD::conexion();

$statement = $conexion->prepare("SELECT * FROM fotoslove");
$statement->execute();
 $resul = $statement->fetchAll();



 $id_actual= (isset($_GET['id']) ? (int)$_GET['id'] :  1);


require 'views/fotolove.view.php';
?>