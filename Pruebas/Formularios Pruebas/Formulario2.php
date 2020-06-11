<html>
<head>

<title> Formulario </title> 
<meta charset="utf-8"/>

</head>

<body>

<?php

echo "<b> Los Nombres son: </b>";
echo $_REQUEST["nombres"]. "</br>";
echo "<b>Los Apellidos son:</b>";
echo $_REQUEST["apellidos"]. "</br>";
echo "<b>La Fecha de Nacimiento es:</b>";
echo $_REQUEST["fecha"]. "</br>";
echo "<b>El Número de Identificación es:</b>";
echo $_REQUEST["id"]. "</br>";
echo "<b>El sexo es :</b>";
echo $_REQUEST["sexo"]. "</br>";
echo "<b>La edad es:</b>";
echo $_REQUEST["edad"]. "</br>";
echo "<b>La Empresa vinculada es:</b>";
echo $_REQUEST["empresa"]. "</br>";
echo "<b>La profesión u oficio es:</b>";
echo $_REQUEST["profesion"]. "</br>";
echo "<b>La Dirección de residencia es:</b>";
echo $_REQUEST["direccion"]. "</br>";
echo "<b>El teléfono fijo es:</b>";
echo $_REQUEST["telefono"]. "</br>";
echo "<b>El teléfono móvil es:</b>";
echo $_REQUEST["movil"]. "</br>";
echo "<b>La EPS Afiliada es:</b>";
echo $_REQUEST["eps"]. "</br>";
echo "<b>El Sueldo Básico es de:</b>";
echo $_REQUEST["sueldo"]. "</br>";
echo "<hr>";

?>

</body>

</html>