<?php
include("../CONFIG/database.php");
$baseDatos = new BD();

$ID = $_GET["ID"];
$nombreTabla;




if(strpos($_SERVER["HTTP_REFERER"],"usuarios")){
    $nombreTabla = "usuarios";
}else if(strpos($_SERVER["HTTP_REFERER"],"categorias")){
    $nombreTabla = "categorias";
}else if(strpos($_SERVER["HTTP_REFERER"],"clientes")){
    $nombreTabla = "clientes";
}else if(strpos($_SERVER["HTTP_REFERER"],"productos")){
    $nombreTabla = "productos";
}else if(strpos($_SERVER["HTTP_REFERER"],"proveedores")){
    $nombreTabla = "proveedores";
}


$consulta= "DELETE FROM ".$nombreTabla." WHERE ID = '".$ID."'";

echo $ID;
echo $nombreTabla;

if(mysqli_query($baseDatos->coneccion, $consulta)){
    header("Location: ../DASHBOARD/".$nombreTabla.".php");
}else{
    echo "no se pudo eliminar";
}

// 

// mysqli_query($baseDatos->coneccion, $consulta)
?>





