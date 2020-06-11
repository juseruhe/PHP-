<html>
<head>

<title> Formulario </title> 
<meta charset="utf-8"/>

</head>

<body>


<?php
$Edad = $_REQUEST["edad"];

if ($Edad >= 18) {
    echo "<form action='Formulario41.php' method='post'  >
    <input type='checkbox' name='soltero' value='soltero' /> Soltero
    <input type='checkbox' name='casado' value='casado' /> Casado
    <input type='checkbox' name='unionlibre' value='unionlibre' /> Unión Libre
    <input type='checkbox' name='otro' value='otro'/> Otro
    <input type='submit' value='Enviar'/> 
    
    </form>
    
    ";
}

else {}

?>




</body>
</html>

