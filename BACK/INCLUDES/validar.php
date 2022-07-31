<?php
include("../CONFIG/database.php");

$objBD = new BD();

$usuarioNick = $_REQUEST["nick"];
$usuarioPass = $_REQUEST["pass"];


$consulta = "SELECT * FROM USUARIOS WHERE NICK = '" . $usuarioNick. "' AND PASSWORD = '" .$usuarioPass. "'";

$resultados = mysqli_query($objBD->coneccion, $consulta);

$fila = mysqli_fetch_row($resultados);

if($fila){
    header("Location: ../DASHBOARD/clientes.php");
}else{
    header("Location: ../");
}





?>