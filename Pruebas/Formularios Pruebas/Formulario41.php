<html>
<head>

<title> Formulario </title> 
<meta charset="utf-8"/>

</head>

<body>


<?php


if($_POST["soltero"]== "soltero"){
    echo " Su Estado Cívil es Soltero";


}

else if ($_POST["casado"]=="casado"){
    echo "Su Estado Cívil es Casado";
}

else if ($_POST["unionlibre"]=="unionlibre"){
    echo "Su Estado Cívil es Unión Libre";
}

else {

    echo "Su Estado Cívil es Otro";
}

?>


</body>
</html>
