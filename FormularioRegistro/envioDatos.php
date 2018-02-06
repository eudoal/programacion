<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inserción Datos en Tabla</title>
  </head>
  <body>
    <?php
    $conector = new mysqli("localhost","root","", "juegos");
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
    }else  {
      $registro = "INSERT INTO juegos.jugadores (nombre, apellidos, edad, curso)
      VALUES ('$_POST[nombre]', '$_POST[apellidos]', '$_POST[edad]','$_POST[curso]')";

      if ($conector->query($registro) === TRUE) {
        echo "<br><br><h1 align = center>Registro Completado</h1><br><br><br>";

      }
    }
      ?>
  </body>
</html>
