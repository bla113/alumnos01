<?php
$contrasena='';
$usuario='root';
$nombrebd='notas';

try{
    $db = new PDO(
'mysql:host=localhost;
dbname='.$nombrebd,
$usuario,
$contrasena,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
  );
    




}catch(Exception $e){

echo "Error de Conexion a la base de Datos".$e->getMessage();


}


?>