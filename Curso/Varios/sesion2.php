<?php
session_start();
$ususes = $_SESSION["usuario"] = $_POST["usu"];
$clases = $_SESSION["clave"] = $_POST["cla"];
?>

<html>

<head>
  <title>Problema</title>
  <meta charset="utf-8"/>
</head>

<body>
 Se almacenaron dos variables en esta sesion <br> <br>
  <a href="sesion3.php">
      Ir a la tercera página donde se recuperarán
    las variables de sesión</a>
</body>

</html>
