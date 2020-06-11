<?php

$Alumno = "AL301001";

$conectar = mysqli_connect("localhost","root","12345","probar");

$consulta = "SELECT * FROM alumnos;

$insertar = INSERT INTO VALUES(id_alumnos,nombres,apellidos,correo,cursos)
VALUES ('$Alumno', '$_POST[nombres]', '$_POST[apellidos]','$_POST[correo]','$_POST[cursos]' )" ;

$abrir=  mysqli_query($conectar,$consulta,$insertar);

$buscar = mysqli_fetch_array($abrir);

while ($buscar) {
    echo "$buscar[alumnos]";
}




?>