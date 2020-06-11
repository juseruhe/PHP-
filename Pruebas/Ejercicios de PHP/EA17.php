<html>
<head>
 <title> Ejercicio Adicional PHP 17</title>
</head>
<body>
 <?php
// Formato Largo Corta
$fecha= date_create("22-11-1715");



date_time_set($fecha,00,50);

echo date_format($fecha,"d-n-Y h:i a");



 ?>
</body>
</html>