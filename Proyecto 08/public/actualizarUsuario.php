<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;

$consulta = new Consulta();


    $seleccion2 = $consulta->getUsuario($_GET['correo']);
      foreach ($seleccion2 as $fila) {

        $correo=$fila['correo'];
        $nombre=$fila['nombre'];
        $apellidos=$fila['apellidos'];
        $edad=$fila['edad'];
        $curso=$fila['curso'];
      }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>

  </head>
  <body>



    <h1 text align="center">Actualiza tus datos</h1><br>
      <center><form action="../listadoUsuarios.php" method="post" onsubmit="return comprobarInsertar()">

        <p text align="center">Cambia los datos que quieras</p>

        <p text align="center">Email</p>
        <input type="text" value="<?= $correo ?>" id="correo" name="correo">

        <p text align="center">Nombre</p>
        <input type="text" value="<?= $nombre ?>" id="nombre" name="nombre">

        <p text align="center">Apellidos</p>
        <input type="text" value="<?= $apellidos ?>" id="apellidos" name="apellidos">

        <p text align="center">Edad</p>
        <input type="text" value="<?= $edad ?>" id="edad" name="edad">

        <p text align="center">Curso</p>
        <input type="text" value="<?= $curso ?>" id="curso" name="curso"><br><br>

        <input type="submit" name="actualizar" value="Actualizar"> </form></center>

      <script src="../js/comprobarInsertar.js"></script>
  </body>
</html>
