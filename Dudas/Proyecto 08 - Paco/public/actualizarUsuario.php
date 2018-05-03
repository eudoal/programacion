<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;

$consulta = new Consulta();

var_dump ($_GET['correo']);
    $seleccion = $consulta->getUsuario($_GET['correo']);
    var_dump ($_GET['correo']);
    var_dump ($seleccion);
      foreach ($seleccion as $fila) {
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



    <h1 text align="center">Introduce tus datos</h1><br>
      <center><form action="../listadoUsuarios.php" method="post" onsubmit="return comprobarInsertar()">

        <p text align="center">Introduce el tu Email y cambia los demás campos</p>

        <p text align="center">Email</p>
        <input type="text" value="<?= $correo ?>" id="correo" name="correo">

        <p text align="center">Nombre</p>
        <input type="text" value="<?= $nombre ?>" id="nombre" name="newNombre">

        <p text align="center">Apellidos</p>
        <input type="text" value="<?= $apellidos ?>" id="apellidos" name="newApellidos">

        <p text align="center">Edad</p>
        <input type="text" value="<?= $edad ?>" id="edad" name="newEdad">

        <p text align="center">Curso</p>
        <input type="text" value="<?= $curso ?>" id="curso" name="newCurso"><br><br>

        <input type="submit" name="actualizar" value="Actualizar"> </form></center>

      <script src="../js/comprobarInsertar.js"></script>
  </body>
</html>
