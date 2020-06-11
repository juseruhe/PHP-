<html>
<head>
  <title>Pagina para llamar la Cookie </title>
<meta charset="utf-8"/>
</head>
<body 
<?php if (isset($_COOKIE['color']))  echo " style=\"background:$_COOKIE[color]\" " 
?>
  <form action="Cookie2.php" method="post">
    Seleccione de que color desea que sea la página de ahora:<br>
    <input type="radio" value="rojo" name="radio"/>Rojo<br>
    <input type="radio" value="verde" name="radio"/>Verde<br>
    <input type="radio" value="azul" name="radio"/>Azul<br>
    <input type="radio" value="azul" name="radio"/>Amarillo<br>
    <input type="radio" value="azul" name="radio"/>Fucsia<br>
    <input type="submit" value="Crear cookie"/>
  </form>
</body>
</html>
