<html>
<head>

<title> Base de Datos </title> 
<meta charset="utf-8"/>

</head>

<body>

<h1> Torneo </h1>
<?php

$bdconectar = mysqli_connect("localhost","root","12345","futbol");

$bdinsertar = mysqli_query($bdconectar,"INSERT INTO club(nombre,tecnico,localidad,barrio,fecha_1,rival_1,
fecha_2,rival_2,fecha_3,rival_3,n_jugadores) VALUES ('$_POST[club]',
'$_POST[tecnico]','$_POST[localidad]','$_POST[barrio]','$_POST[fecha1]','$_POST[rival1]',
'$_POST[fecha2]', '$_POST[rival2]', '$_POST[fecha3]', '$_POST[rival3]', '$_POST[numero]') ");


echo "El Club es :".$_POST["club"]. " <br>  El Director técnico es:". $_POST["tecnico"]. "  <br> La Localidad es:". $_POST["localidad"].
" <br>  La cantidad de Jugadores es:". $_POST["numero"]. " <br>  El barrio es:".$_POST["barrio"]. "  <br>  La primera fecha:". $_POST["fecha1"] . " <br> El rival es:".
 "<br>".$_POST["rival1"]  . "<br>".$_POST["fecha2"] . "  <br>  El rival es:". $_POST["rival2"]  . "<br>".  $_POST["fecha3"] . " <br>   El rival es:". $_POST["rival3"] ;

?>



 





</body>
</html>