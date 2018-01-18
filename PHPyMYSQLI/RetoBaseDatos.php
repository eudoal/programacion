<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo</title>
  </head>
  <body>

    <?php
    $conector = new mysqli("localhost", "root", "", "world");
    if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
    }
else {
//interaccion con la base de datos
 ?>
  <h1>Paises del mundo</h1>

<?php
$resultado = $conector->query("SELECT name, SurfaceArea
from country
where Region='South America'
order by SurfaceArea desc");

while($fila=$resultado->fetch_assoc()){
          echo "El pais es: "."<strong>".$fila['name']."</strong>".","."&nbsp"
          ."y su superficie es de: "."<strong>".$fila['SurfaceArea']."</strong>"."&nbsp"."m&#178"."<br>";
      }


}

 ?>
  </body>
</html>
