<?php

if(isset($_POST['color'])) 
{

    $color = $_POST['color'];
    setcookie('color',$color,time()+8000000);

}

else {
    if(isset($_COOKIE['color'])){
     $color= $_COOKIE['color'];
    }

    else{
        $color= 'white';
    }
}


?>

<html>
<head>
<title> Cookies </title>
</head>

<body <?php echo"style='background-color:$color'";         ?> >

<form method="post" action="cookiendo.php"/>

<label for="color"> Escoge Color de Fondo </label>

<select name="color">
<option value="red"> Rojo </option>
<option value="blue"> Azul </option>
<option value="green"> Verde </option>
<option value="yellow"> Amarillo </option>
<option value="silver"> Gris</option>
<option value="black"> Negro </option>
</select>

<input type="submit" value="Cambiar Color"/>

</form>
</body>
</html>