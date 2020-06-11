<?php
require("bdplus1.php");



switch ($_POST["departamento"]){
    case "Cundinamarca": 
        $capital = "Bogotá D.C.";
        $sitio ="Plaza de Bolívar";
        $conexion = mysqli_connect($host,$usuario,$contrasena,$bd);
         mysqli_query($conexion,"INSERT INTO clase(departamento,capital,sitio)
        VALUES('$_POST[departamento]', '$capital', '$sitio' ) ") ;
    echo "El departamento es:".$_POST["departamento"]."La Cápital es :". $capital."Sitio turistico".$sitio;
    
break;


    case "Antioquia":
        $capital = "Medellín";
        $sitio ="Plaza Botero";
        $conexion = mysqli_connect($host,$usuario,$contrasena,$bd);
mysqli_query($conexion,"INSERT INTO clase(departamento)
VALUES('$_POST[departamento]', '$capital','$sitio') ") ;
        echo"El departamento es:".$_POST["departamento"]."La Cápital es Medellín Sitio turistico Metro"; 
    break;


    case "Caldas":
        $capital = "Manizales";
        $sitio ="Eje Cafetero";
        $conexion = mysqli_connect($host,$usuario,$contrasena,$bd);
mysqli_query($conexion,"INSERT INTO clase(departamento,)
VALUES('$_POST[departamento]') ") ;
echo"El departamento es:".$_POST["departamento"]."La Cápital es Manizales Sitio turistico Eje Cafetero"; 
 break;
   



case "Risaralda":
        $conexion = mysqli_connect($host,$usuario,$contrasena,$bd);
mysqli_query($conexion,"INSERT INTO clase(departamento)
VALUES('$_POST[departamento]') ") ;
echo"El departamento es:".$_POST["departamento"]."La Cápital es Risaralda Sitio turistico Simón Bolívar"; 
break;
    

case "Quindio":
        $conexion = mysqli_connect($host,$usuario,$contrasena,$bd);
mysqli_query($conexion,"INSERT INTO clase(departamento)
VALUES('$_POST[departamento]') ") ;
 echo"El departamento es:".$_POST["departamento"]."La Cápital es Armenia Sitio turistico Parque Panaca";
 break;
   
 case "Santander":
             
         
             $ciudad="Bucaramanga";
            $turismo="Parque Nacional del Chicamocha- Panachi";
            $link = mysqli_connect($host,$usuario,$contrasena,$bd);
            mysqli_query($link,"INSERT INTO clase(departamento,capital,sitio) 
            VALUES ('$_POST[departamento]', '$ciudad', '$turismo')");            
           
           echo" El departarmento de: ".$_POST['departamento']. "la capital es: ". $ciudad. "el sitio turistico es:". $turismo ;
 
 
 default: "Error no existe departamento";
}


?>
