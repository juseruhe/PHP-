<html>

<head>
<title> PHP  Clase #2  </title>
</head>


<body>


<?php

// Condicionales if anidados


$num1 = 80;
$num2 = 153;
$num3= 50;

echo "El numero 1 es: $num1 <br>";
echo "El numero 2 es: $num2 <br>";
echo "El numero 3 es: $num3 <br>";



if($num1>$num2 and $num1>$num3){

    echo" El número 1 :$num1  es el mayor";

}

else if ($num2 > $num1 and $num2 > $num1){

    echo" El número 2 es:$num2 es el mayor";
}

else {

    echo"El número 3 es :$num3 es el mayor";
}

?>

<hr>
</body>
</html>