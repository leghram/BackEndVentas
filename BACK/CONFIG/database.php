<?php
//esta es la base de datos
include("constantes.php");


// class BD{
    $dirBD = HOST;
    $nameBD = NAME_BD;
    $userBD = USER;
    $passwordBD= PASSWORD;

    $conecction;

//     function __construct(){

//     }
// }




function conectar(){
    $dirBD = HOST;
    $nameBD = NAME_BD;
    $userBD = USER;
    $passwordBD= PASSWORD;


   $con = mysqli_connect($dirBD,$userBD,"",$nameBD);
   $consulta = "SELECT * FROM CLIENTES";

   $resultados = mysqli_query($con, $consulta);
   $fila = mysqli_fetch_row($resultados);
   echo $fila[0];
}

conectar();



?>