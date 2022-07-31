<?php
//include("../CONFIG/constantes.php");
include("../CONFIG/database.php");

$veamos = new BD();
$consulta = "SELECT * FROM CLIENTES";



  $resultados = mysqli_query($veamos->coneccion, $consulta);
  $fila = mysqli_fetch_row($resultados);
 echo $fila[3];





// function conectar(){
//      $dirBD = HOST;
//      $nameBD = NAME_BD;
//      $userBD = USER;
//      $passwordBD= PASSWORD;


//     $con = mysqli_connect($dirBD,$userBD,"",$nameBD);
//     $consulta = "SELECT * FROM CLIENTES";

//     $resultados = mysqli_query($con, $consulta);
//     $fila = mysqli_fetch_row($resultados);
//     echo $fila[0];
//  }

//  conectar();







?>
