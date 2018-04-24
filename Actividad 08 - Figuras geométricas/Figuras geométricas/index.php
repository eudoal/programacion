<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Figuras</title>
  </head>
  <body>

    <?php
    include 'circulo.php';
    include 'cuadrado.php';
    include 'triangulo.php';

    $circulo = new Circulo();
    $circulo->setRadio(3);

    $cuadrado = new Cuadrado();
    $cuadrado->setLado(4.5);

    $triangulo = new Triangulo();
    $triangulo->setBase(5.2);
    $triangulo->setAltura(3);
    ?>

    <table border="1" align="center">
    <tr>
     <th></th>
     <th>Círculo</th>
     <th>Cuadrado</th>
     <th>Triángulo</th>

    </tr>
    <tr>
     <th>Área</th>
     <td><?php echo $circulo->area()?></td>
     <td><?php echo $cuadrado->area()?></td>
     <td><?php echo $triangulo->area()?></td>
    </tr>
    <tr>
     <th>Perímetro</th>
     <td><?php echo $circulo->perimetro()?></td>
     <td><?php echo $cuadrado->perimetro()?></td>
     <td><?php echo $triangulo->perimetro()?></td>
    </tr>
    </table>

  </body>
</html>
