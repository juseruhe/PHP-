<html>
<head>
 <title> Clase IF</title>
 <meta charset = "utf -8"/>
</head>
<body>

<?php
// M viaja F Cuarentena

$Sexo = "M";
$Edad = 20;


if($Sexo == "M" && $Edad >= 18 )  {

echo "Viaja a Fín de Año";


}

else if ($Edad < 18 && $Sexo == "M") {


    echo "Puede viajar a fín de año pero debe estar acompañado de un adulto";


}


else {

    echo "Debe permanecer en cuarentena";
}



 ?>
</body>
</html>