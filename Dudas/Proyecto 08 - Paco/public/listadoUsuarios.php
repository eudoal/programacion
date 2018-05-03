<?php
require_once __DIR__.'/../vendor/autoload.php';
//include "model/Db.php";
use Daw\models\Db;
//include "model/Consulta.php";
use Daw\models\Consulta;


$consulta = new Consulta();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista Usuarios</title>
  </head>
  <style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}

th {
  background-color: #0D9D0F;
  }
td {
  background-color: rgb(107,189,215);
  text-align: center;
}
</style>
  <body>
    <h1 text align="center">Listado de usuarios</h1>
  </body>

  <?php

      if (isset($_POST["Registros"])) {
        $consulta->insertarUsuario();

        }

      if (isset($_POST["actualizar"])) {
        $consulta->actualizarUsuario();

        }

      if (isset($_POST["eliminar"])) {
        $consulta->borrar();

        }
      ?>

    <table style="width:60%" align="center">
    <tr>
        <th >BORRAR</th>
        <th >CORREO</th>
        <th >NOMBRE</th>
        <th >APELLIDOS</th>
        <th >EDAD</th>
        <th >CURSO</th>
        <th >PUNTUACIÓN</th>
        <th >ACTUALIZAR</th>
    </tr>
    <?php

$seleccion = $consulta->getUsuarios();
      foreach ($seleccion as $fila) {

        echo "<tr>"."<td>"
        ."<a href='borrarUsuario.php/?correo=".$fila['correo']."'>Borrar usuario</a></td>"."<td>"
        .$fila['correo']."</td>"."<td>"
        .$fila['nombre']."</td>"."<td>"
        .$fila['apellidos']."</td>"."<td>"
        .$fila['edad']."</td>"."<td>"
        .$fila['curso']."</td>"."<td>"
        .$fila['puntuacion']."</td>"."<td>"
        ."<a href='actualizarUsuario.php/?correo=".$fila['correo']."'>Actualizar usuario</a></td>"."</tr>";
    }

    ?>

    </table>
    <table style="width:33%" align="center">
      <br></br>
    <tr>
      <!--
        <th ><a href="actualizarUsuario.php">Actualizar usuario</a></th>
        <th ><a href="borrarUsuario.php">Borrar usuario</a></th>
      -->
        <th ><a href="insertarUsuario.php">Nuevo usuario</a></th>
    </tr>
</table>
<br></br>
<br></br>
</html>
