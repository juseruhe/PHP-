<html>
<head>
 <title> Ejercicio Adicional PHP 26</title>
</head>
<body>
 <?php
// Bogota-Guajira 1100 KM  8500 Galón  12 peajes * 11.000

$Galon = 8500;
$GalonTotal = $Galon *2;

$Peajes = 11000 * 12;
$PeajesTotal = $Peajes *2;


$Gastos = $GalonTotal + $PeajesTotal;

echo"Los Gastos Totales del viaje Bogotá-La Guajira son : $Gastos";




 ?>
</body>
</html>