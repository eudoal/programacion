<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Independencia</title>
  <?php $titulo="Independencia";?>
    <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #111;
    }

    .active {
        background-color: #4CAF50;
    }
    </style>
    </head>
    <body>

  <ul>
    <?php if ($titulo=="Superficie"){?>
      <li><a class="active" href="./Superficie.php">Superficie</a></li>
    <?php }
     else {?>
      <li><a href="./Superficie.php">Superficie</a></li>
    <?php }?>

    <?php if ($titulo=="Continente"){?>
      <li><a class="active" href="./Continente.php">Continente</a></li>
    <?php }
     else {?>
      <li><a href="./Continente.php">Continente</a></li>
    <?php }?>

    <?php if ($titulo=="Independencia"){?>
      <li><a class="active" href="./Independencia.php">Independencia</a></li>
    <?php }
     else {?>
      <li><a href="./Independencia.php">Independencia</a></li>
    <?php }?>


    </ul>
    <br>
    <br>
    <br>
    <h2><?php
      echo "Paises organizados por $titulo"
      ?></h2>
      <?php
      $conector = new mysqli("localhost", "root", "", "world");
      if ($conector->connect_errno) {
          echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      }
  else {
  //interaccion con la base de datos

  $resultado = $conector->query("SELECT name, IndepYear
from country
order by name asc");

  while($fila=$resultado->fetch_assoc()){

            echo "El país es: "."<strong>".$fila['name']."</strong>".","."&nbsp";
            if ( $fila['IndepYear']==null) {
            echo  $fila['IndepYear']."el país "."<strong>"."No está independizado"."</strong>"."<br>";
            }
            else {
            echo "Independizado en el año: "."<strong>".$fila['IndepYear']."</strong>"."<br>";
            }

        }



  }

   ?>
    </body>
    </html>
