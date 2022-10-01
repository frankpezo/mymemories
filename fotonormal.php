<?php
//Hacemos la conexión a la bd
require 'conexion.php';
$conexion=BD::conexion();

$statement = $conexion->prepare("SELECT * FROM fotosnormal");
$statement->execute();
 $resul = $statement->fetchAll();



 $id_actual= (isset($_GET['id']) ? (int)$_GET['id'] :  1);
 $accion = isset($_POST['accion'])?$_POST['accion']:'';

 if($accion != ''){
    switch($accion){
      case 'borrar':
         $sql = "DELETE FROM fotosnormal WHERE id= $id_actual";
         $consulta = $conexion->prepare($sql);
         $consulta->execute();
         header('Location: normal.php');
        break;
    }
 }


require 'views/fotonormal.view.php';
?>