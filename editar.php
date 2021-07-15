<?php
if(!isset($_GET['id'])){
    header('Locationm: index.php');
}

include 'conexion.php';
$id= $_GET['id'];

$sentencia= $db->prepare("SELECT *FROM alumno where id_alumno = ?;");
$resultado = $sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($persona);
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <form method= "POST" action="editar_proceso.php">

    <table>
        <tr>
            <td>Apellido Paterno</td>
            <td><input type="text" name="txt2Paterno" value="<?php echo $persona->ap_paterno;?>"></td>
        </tr>
        <tr><td>Apellido Materno</td>
            <td><input type="text" name="txt2Materno" value="<?php echo $persona->ap_materno;?>""></td>
        </tr>
           
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="txt2Nombre" value="<?php echo $persona->nombre;?>""></td>

        </tr>
           
        <tr>
        <td>Examen Parcial</td>
            <td><input type="text" name="txt2Parcial" value="<?php echo $persona->ex_parcial;?>""></td> 
        </tr>

           
        <tr>
        <td>Examen Final</td>
        <td><input type="text" name="txt2Final" value="<?php echo $persona->ex_final;?>""></td>

        </tr>

          
           
         <tr>
             <input type="hidden" name="oculto" id="0">
             <input type="hidden" name="id2" value="<?php echo $persona->id_alumno; ?>" >
         
          <td><input type="submit" value="EDITAR ALUMNO"></td>
      </tr>


    </table>

    </form>
</body>
</html> 