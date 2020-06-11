<html>
<head>
 <title> Curso PHP Manuel Muñoz</title>
 <meta charset = "utf -8"/>
</head>
<body>
<p> Esta mi primera página web </p>
 <?php

$coches = array("SEAT","FIAT","Volvo");

echo "$coches[0]</br>";

$coches2 = array("seat" => "SEAT", "fiat" => "FIAT", "volvo" => "Volvo" );
echo  $coches2["fiat"];



 ?>
</body>
</html>