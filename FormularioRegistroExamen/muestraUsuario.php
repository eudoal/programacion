<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de URL GET</title>
  </head>
  <body>
    <?php
    $conector = new mysqli("localhost", "root", "", "juegos");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
    }else {

    $id=$_GET["id"];
    $consulta="SELECT * FROM jugadores WHERE id='$id' ";
    $resultado = $conector->query($consulta);
    foreach ($resultado as $fila) {

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
