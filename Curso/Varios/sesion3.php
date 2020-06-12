<?php
session_start();
?>
<html>
<head>
    <title>Programa que devuelve los valores de las variables digitadas de la sesion </title>
</head>
<body>
    <?php
    echo "Nombre de usuario digitado de la variable de sesión: ". $_SESSION["usuario"];
    echo "<br> <br>";
    echo "La clave digitada  de la variable de sesión:" . $_SESSION["clave"];
    ?>
</body>
</html>
