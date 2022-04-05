<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  echo $_REQUEST['fecha'];
  if ($_REQUEST['radio1'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma;
  } else {
    if ($_REQUEST['radio1'] == "resta") {
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:" . $resta;
    }
  }
  ?>
</body>

</html>