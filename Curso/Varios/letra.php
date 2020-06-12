<?php

if(isset($_POST['letra'])) 
{

    $letra = $_POST['letra'];
    setcookie('letra',$letra,time()+8000000);

}

else {
    if(isset($_COOKIE['letra'])){
     $letra= $_COOKIE['letra'];
    }

    else{
        $letra= 'algebrian';
    }
}


?>

<html>
<head>
<title> Cookies </title>
</head>

<body <?php echo"style='font-family:$letra; font-size:40px; ' "  ;       ?> >
<form method="post" action="letra.php">

<select name="letra">
<option value="arial"> Arial </option>
<option value ="castellar"> Castellar </option>
<option value="georgia"> Georgia</option>


</select>
<input type="submit" value="cambiar"/>
</form>


<p size=30> Juan Rojas ID=524886 Codigo:3040 </p>



</body>
</html>