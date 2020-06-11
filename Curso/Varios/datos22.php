<?php


$inc = include("datos2.php");

if ($inc) {

    $consulta = "SELECT * FROM probando";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){

while($row = $resultado -> fetch_array()) {
$id = $row["id"];
$nombres = $row["nombres"];
$apellidos = $row["apellidos"];
$correo = $row["correo"];
$telefono = $row["telefono"];

?>



<div>

<h2> <?php   echo $nombres        ?> </h2>

<p>

<b> ID:  <?php  echo $id; ?>   </B>   <br>
<b> Correo: <?php echo $correo;   ?>   </B>  <br>
<b>  Telefono: <?php   echo $telefono;?>   </B>  <br>


</p>

</div>

<?php
}
}
}
?>
