<?php
//Hacemos la conexión a la bd
require 'conexion.php';
$conexion=BD::conexion();

$statement = $conexion->prepare("SELECT * FROM fotoslove");
$statement->execute();
 $resul = $statement->fetchAll();



 $id_actual= (isset($_GET['id']) ? (int)$_GET['id'] :  1);
 $accion = isset($_POST['accion'])?$_POST['accion']:'';

 if($accion != ''){
    switch($accion){
      case 'borrar':
         $sql = "DELETE FROM fotoslove WHERE id= $id_actual";
         $consulta = $conexion->prepare($sql);
         $consulta->execute();
         header('Location: love.php');
        break;
    }
 }


require 'views/fotolove.view.php';
?>