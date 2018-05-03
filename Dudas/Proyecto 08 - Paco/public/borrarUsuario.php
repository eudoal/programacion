<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;

$consulta = new Consulta();

var_dump ($_GET['correo']);
    $seleccion = $consulta->getUsuario($_GET['correo']);
 {
        $correo=$_GET['correo'];
        var_dump ($correo);
      }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuario</title>
  </head>
  <body>
    <h1 text align="center">Introduce tu Email para borrar tu usuario<br></h1>

    <center><form action="../listadoUsuarios.php" method="post" onsubmit="return comprobarInsertar()">

          <input type="text" name="correo" value="<?= $correo ?>" id="correo" >

      <input type="submit" name="eliminar" value="Borrar usuario">
    </form></center>

  <script src="../js/comprobarInsertar.js"></script>
  </body>
</html>
