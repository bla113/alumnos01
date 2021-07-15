<?php 

if (!isset($_GET['id'])){

exit();


}


$codigo = $_GET['id'];

include 'conexion.php';
$sentencia = $db->prepare("DELETE FROM alumno WHERE id_alumno = ?;");
$resultado= $sentencia->execute([$codigo]);


if($resultado === TRUE){
    echo "eLIMINADO Correctamente";
    header('Location: index.php');
}else{
    echo "error";
}
?>