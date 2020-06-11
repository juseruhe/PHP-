<?php
if ($_REQUEST['radio'] == "rojo")
  setcookie("color", "#ff0000", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "verde")
  setcookie("color", "#00ff00", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "azul")
  setcookie("color", "#0000ff", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "amarillo")
  setcookie("color", "#fff333", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "fucsia")
  setcookie("color", "#f514c6", time() + 60 * 60 * 24 * 365, "/");
?>
<html>
<head>
  <title>Programa para enviar la cookie y cambiar el color de la pagina </title>
</head>
<body>
  Se creó la cookie.
  <br>
  <a href="cookie1.php">Ir a la otra página para otro cambio </a>
</body>
</html>
