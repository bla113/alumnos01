<?php
include 'conexion.php';
$sentencia =$db->query("SELECT * FROM alumno;");
$alumnos=$sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($alumnos);

?>



<!DOCTYPE html>
<html>
<title>Lista de Alumnos</title>
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
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<body>

<h2>Lista de Alumnos</h2>

<table>
  
  <tr>
    <td>Id</td>
    <td>Apellido Parteno</td>
    <td>Apellido Materno</td>
    <td>Nombre</td>
    <td>Examen Parcial</td>
    <td>Examen Final</td>
    <td>Promedio</td>
    <td>Acciones</td>
  
  </tr>

  <?php 
  
  foreach($alumnos as $dato){
    ?>
    <tr>
        <td><?php echo $dato->id_alumno; ?> </td>
        <td><?php echo $dato->ap_paterno; ?> </td>
        <td><?php echo $dato->ap_materno; ?> </td>
        <td><?php echo $dato->nombre; ?> </td>
        <td><?php echo $dato->ex_parcial; ?> </td>
        <td><?php echo $dato->ex_final; ?> </td>
        <td><?php echo ($dato->ex_final+$dato->ex_parcial)/2; ?> </td>
        <td> <a href="editar.php?id=<?php echo$dato->id_alumno;?>">Editar</a>
        <a href="eliminar.php?id=<?php echo $dato->id_alumno;?>">Eliminar</a></td>
       
  </tr>
  <tr>

    <?php

  }
  
  ?>

  
  
</table>


<!-- Inicio Insertar -->
<hr>
<h3>Ingresar alumnno</h3>
<form method="POST" action="insertar_alumno.php">
  <table>
      <tr>
          <td>Apelido Paterno:</td>
          <td><input type="text" name="txtPaterno"></td>
      </tr>
      <tr>
          <td>Apelido Materno:</td>
          <td><input type="text" name="txtMaterno"></td>
      </tr>
      <tr>
          <td>Nombre:</td>
          <td><input type="text" name="txtNombre"></td>
      </tr>
      <tr>
          <td>Examen Parcial:</td>
          <td><input type="text" name="txtParcial"></td>
      </tr>
      <tr>
          <td>nota Final:</td>
          <td><input type="text" name="txtFinal"></td>
      </tr>
      <input type="hidden" name="oculto" value="">

      <tr>
          <td><input type="reset" name=""></td>
          <td><input type="submit" value="Guardar"></td>
      </tr>
  </table>




</form>





</body>
</html> 