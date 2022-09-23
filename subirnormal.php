<?php
//Hacemos la conexión a la bd
require 'conexion.php';
$conexion=BD::conexion();

if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)){
    //Para comprobar que se una imagen
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    //
    if($check != false){
       //Ruta donde se guardará las fotos
       $carpeta_destino= 'fotos/normal/';
       $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
       //subir la foto
       move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
      
       //La conexión a la bd 
       $statement = $conexion->prepare(
        "INSERT INTO fotosnormal(titulo, imagen, texto) VALUES(:titulo, :imagen, :texto)"
       );
       $statement ->execute(array(
        ':titulo'=> $_POST['titulo'],
        ':imagen'=>$_FILES['foto']['name'],
        ':texto'=>$_POST['texto']
       ));
      
       //Redegirimos al usuario 
       header('Location: normal.php');

    }else{
        $error = "El archivo no es una imagen o es muy pesado";
    }

}//condicional principal




require 'views/subirnormal.view.php';
?>