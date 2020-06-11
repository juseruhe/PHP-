<html>
<head>
 <title> Ejercicio Adicional PHP 6</title>
</head>
<body>
 <?php
 //Entrar dos números y saber cual es el menor y mayor
$num1 = 10.15;
$num2 = 35.86;

if($num1 > $num2) {

    echo"El número 1 : $num1 es el mayor </br> El Número 2: $num2 es el menor";
}

else if ($num2 > $num1) {

    echo"El número 2: $num2 es el mayor </br> El Número 1: $num1 es el Menor";

}

else {

    echo "Son iguales los números";
}


 ?>
</body>
</html>