<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Nosotros</title>
  <?php $titulo="Nosotros";?>
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
    <?php if ($titulo=="Home"){?>
      <li><a class="active" href="./home.php">Home</a></li>
    <?php }
     else {?>
      <li><a href="./home.php">Home</a></li>
    <?php }?>

    <?php if ($titulo=="Nosotros"){?>
      <li><a class="active" href="./nosotros.php">Nosotros</a></li>
    <?php }
     else {?>
      <li><a href="./nosotros.php">Nosotros</a></li>
    <?php }?>

    <?php if ($titulo=="Contacto"){?>
      <li><a class="active" href="./contacto.php">Contacto</a></li>
    <?php }
     else {?>
      <li><a href="./contacto.php">Contacto</a></li>
    <?php }?>

    </ul>

    <br>
    <br>
    <br>
    <h2><?php
      echo "Estás en la página $titulo"
    ?></h2>
    </body>
    </html>
