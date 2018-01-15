<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Pintar 03</title>

</head>

<body>
  <h1>Figura 03</h1>
  <div class="">
    <?php
  $figura = "*";
    for ($contador=1; $contador<=4 ; $contador++) {
    echo $figura."<br>";
    $figura .= "*";
    }
    for ($contador=1; $contador<=3 ; $contador++) {
    echo $figura."<br>";
    $figura .= "*";
    }
 ?>
  </div>
</body>

</html>
