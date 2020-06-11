<html>
<head>
 <title> Ejercicio Adicional PHP 16</title>
</head>
<body>
 <?php
// Formato Largo Fecha
$fecha= date_create("22-11-1715");



date_time_set($fecha,12,50,32);

echo date_format($fecha,"d F Y H:i:s a");



 ?>
</body>
</html>