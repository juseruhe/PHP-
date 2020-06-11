<html>
<head>
 <title>Valoraleatorio #2</title>
</head>
<body>
 <?php
 // Valor aleatorio 1 al 3
 $valor = rand(1, 3);
 echo "<h1>El valor sorteado para la loteria  es $valor </h1> <br>";
 if ($valor == 3) {
 echo "Felicidades es el número ganador";
 } else {
 echo "<p>Lo siento sigue intentando </p>";
 }
 ?>
</body>
</html>