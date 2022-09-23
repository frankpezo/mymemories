<?php
//Creamos la conexión de la bd
class BD{
 //Agregamos atributo
 public static $instancia= null;

//Creamos la función 
public static function conexion(){
    if(!isset(self::$instancia)){
        $opciones[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;
        self::$instancia = new PDO('mysql:host=localhost; dbname=memoria_galeria', 'root','',$opciones);
       // echo "CONECTADO ";
    }
    return self::$instancia;
}


}//finalClase


?>