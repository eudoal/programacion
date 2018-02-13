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
      $registro = "INSERT INTO juegos.jugadores (correo, nombre, apellidos, edad, curso)
      VALUES ('$_POST[correo]', '$_POST[nombre]', '$_POST[apellidos]', '$_POST[edad]','$_POST[curso]')";

      if ($conector->query($registro) === TRUE) {
        echo "<br><br><h1 align = center>Registro Completado</h1><br><br><br>";
      }

      $resultado = $conector->query("SELECT * from jugadores");
      while($fila=$resultado->fetch_assoc()){
          echo "<strong>"."Correo: "."</strong>".$fila['correo']."&nbsp"."&nbsp"."&nbsp"."<strong>"."Nombre: "
          ."</strong>".$fila['nombre']."&nbsp"."&nbsp"."&nbsp"."<strong>"."Apellidos: "
          ."</strong>".$fila['apellidos']."&nbsp"."&nbsp"."&nbsp"."<strong>"."Edad: "."</strong>".$fila['edad']
          ."&nbsp"."&nbsp"."&nbsp"."<strong>"."Curso: "."</strong>".$fila['curso']."&nbsp"."&nbsp"."&nbsp"."<strong>"."Puntuacion: "
          ."</strong>".$fila['puntuacion']."<br>";
      }
    }
      ?>
  </body>
</html>
