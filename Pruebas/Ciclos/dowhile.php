<html>
<head>
 <title> Ciclo For</title>
 <meta charset = "utf-8"/>
</head>
<body>

<?php

   
$numero = 1;

do {

    echo "$numero </br>" ;
    $numero++;
    $contador=0;
    

    if ($numero %2 == 0)  {
        $contador = $contador + $numero;
    }

else {

}


}

while ($numero<= 20);

echo "Los Números pares del 1 al 20 son : $contador";


 ?>
</body>
</html>