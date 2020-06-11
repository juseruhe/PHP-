<html>
<head>

<title> Formulario </title> 
<meta charset="utf-8"/>

</head>

<body>

<?php


$Sexo = $_REQUEST["sexo"];
$Tipo_Cedula = $_REQUEST["td"];

if($Sexo == "Masculino" &&  $Tipo_Cedula == "Cédula de Ciudadanía" ){

    echo"<h1> Puede salir  a la Calle porque es mayor de edad y puede ir a mercar.  </h1>";
}

else if ($Sexo == "Masculino" && $Tipo_Cedula != "Cédula de Ciudadanía" ) {

    echo"<h1> Solo puede salir 30 minutos y puede ir a mercar. </h1>";
}


else if ($Sexo == "Femenino" && $Tipo_Cedula == "Cédula de Ciudadanía") {

    echo "<h1> Puede salir a la calle porque es mayor de edad y tiene derecho a ser protegida. </h1>";

}

else {
    echo"<h1> Solo puede salir 30 minutos y tiene derecho a ser protegida. </h1>";
}

?>

</body>
</html>