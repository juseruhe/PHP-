<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
<h1> Usuarios Registrados </h1>
<table>
<tr> 
<td> <h4> Tipo de Documento </h4> </td>
<td> <h4>  Número </h4> </td>
<td> <h4>  Nombre </h4> </td>
<td> <h4>  Foto </h4> </td>
</tr>

<?php

$bd= mysqli_connect("localhost","root","","ingresorelacional");

$consulta= "SELECT *  FROM usuario 
join tipo_documento on usuario.td = tipo_documento.id ";


$conectar = mysqli_query($bd,$consulta);





while ($buscar= mysqli_fetch_assoc($conectar))  {
?>

<tr> 
<td> <h4> <?php echo " $buscar[nombre_td] "?> </h4> </td>
<td> <h4> <?php echo "$buscar[numero] "?> </h4> </td>
<td> <h4> <?php  echo "$buscar[nombre]" ?></h4> </td>
 <td> <img src="../Ingreso Relacional/<?php echo"$buscar[foto]"?>" width=100 height=100/>  </td>
</tr>




<?php
}

?>
</table>
</body>
</html>