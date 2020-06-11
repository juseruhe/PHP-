<html>
<head>

<title> Base de Datos EPS </title> 
<meta charset="utf-8"/>

</head>

<body>

<h1> EPS</h1>


<select name="var">
<option>  James </option>

</select>


</select>

<?php

      

    $var =   $_POST["var"];

    if($var=="James"){
        echo"<select>
        <option> ja
        <option> mes
        </select>";
    }
    else{

    }
    

    ?>

<input type="submit"  value="Enviar"/>

</form>
