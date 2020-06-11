<html>
<head>
 <title> Ejercicio Adicional PHP 25</title>
</head>
<body>
 <?php
// Coca Cola 350 ml precio e iva

$CocaCola1 = 1700;
$CocaCola30 = ($CocaCola1 * 30) ;
$CocaColaIVA = $CocaCola30 * 0.19;
$CocaColaToTal = $CocaCola30 + $CocaColaIVA;
$CocaCola1IVA= $CocaCola1 * 0.19;

echo"El costo total de las 30 Coca Cola de 350 ml con IVA incluido son $CocaColaToTal y el IVA por Coca Cola cada uno  es por un $CocaCola1IVA ";




 ?>
</body>
</html>