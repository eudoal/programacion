<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contacto</title>
  </head>
  <body>
    <?php $donde="Contacto"; ?>
    <ul>
      <li><a href="./home.php">Home</a></li>
      <li><a href="./nosotros.php">Nosotros</a></li>
      <li><a href="./contacto.php">Contacto</a></li>
    </ul>
    <h2><?php if ($donde=="Contacto") {
      echo $donde;
      }
      ?></h2>
  </body>
</html>
