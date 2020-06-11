
<?php

$conexion = mysqli_connect("localhost","root","12345","mostrardatos");


?>

<html>
<head>

<title> Mostrar Datos </title> 
<meta charset="utf-8"/>

</head>

<body>


<table border="2">
<tr>
    <td> id </td>
    <td> nombre </td>
    <td> apellido </td>
    <td> correo  </td>
    <td> teléfono </td>
</tr>

<?php

$sql = "SELECT * FROM probando";
$result= mysqli_query($conexion,$sql);



while($mostrar=mysqli_fetch_array($result)) {
?>

<tr>
    <td> <?php  echo $mostrar['id'];   ?>  </td>
    <td>  <?php  echo $mostrar['nombres'];    ?>  </td>
    <td> <?php  echo $mostrar['apellidos'];      ?>   </td>
    <td> <?php  echo $mostrar['correo'];     ?>  </td>
    <td> <?php  echo $mostrar['telefono'];     ?>  </td>
</tr>

<?php

}


?>


</table>







</body>
</html>