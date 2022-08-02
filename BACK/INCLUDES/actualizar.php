<?php
include("../CONFIG/database.php");

$baseDatos = new BD();

$consulta;


$nombreTabla;

$dato1="";
$dato2="";
$dato3="";
$dato4="";
$dato5="";
$dato6="";
$dato7="";





if(strpos($_SERVER["HTTP_REFERER"],"usuarios")){
    $nombreTabla="usuarios";
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['NICK']; 
    $dato3=$_REQUEST['PASSWORD']; 
    $dato4=$_REQUEST['NOMBRE']; 
    $dato5=$_REQUEST['APELLIDOS']; 
    $dato6=$_REQUEST['EMAIL']; 
    $dato7=$_REQUEST['ACTIVO'];   
    $datoEvaluar = $_REQUEST['NICK']; 
    $nombreColumna = "NICK"; 

    ComprobarDobles($nombreTabla,"ID",$_REQUEST['ID']);
    ComprobarDobles($nombreTabla,$nombreColumna,$datoEvaluar);

    if($existe == false && $_REQUEST['NICK'] != ""){
        $consulta = "UPDATE ".$nombreTabla." SET NICK = '".$dato2."' , PASSWORD = '".$dato3."' , NOMBRE = '".$dato4."' , APELLIDOS = '".$dato5."' , EMAIL = '".$dato6."' , ACTIVO = '".$dato7."' WHERE ID = '".$dato1."'";
        // $consulta = "INSERT INTO ".$nombreTabla." VALUES ('".$dato1."','".$dato2."','".$dato3."','".$dato4."','".$dato5."','".$dato6."','".$dato7."')";
    }else{
        $consulta="INSERT INTO TABLA VALUES ('A')";
    }

}else if(strpos($_SERVER["HTTP_REFERER"],"categorias")){
    $nombreTabla="categorias";
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['NOMBRE']; 
    $dato3=$_REQUEST['ACTIVO'];
    $datoEvaluar = $_REQUEST['NOMBRE']; 
    $nombreColumna = "NOMBRE"; 

    ComprobarDobles($nombreTabla,"ID",$_REQUEST['ID']);
    ComprobarDobles($nombreTabla,$nombreColumna,$datoEvaluar);

    if($existe == false && $_REQUEST['NOMBRE'] != ""){
        $consulta = "UPDATE ".$nombreTabla." SET NOMBRE = '".$dato2."' , ACTIVO = '".$dato3."' WHERE ID = '".$dato1."'";

    }else{
        $consulta="INSERT INTO TABLA VALUES ('A')";
    }

}else if(strpos($_SERVER["HTTP_REFERER"],"clientes")){
    $nombreTabla="clientes";
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['NOMBRE']; 
    $dato3=$_REQUEST['RUC']; 
    $dato4=$_REQUEST['DIRECCION']; 
    $dato5=$_REQUEST['TELEFONO']; 
    $dato6=$_REQUEST['EMAIL']; 
    $dato7=$_REQUEST['ACTIVO'];   
    $datoEvaluar = $_REQUEST['RUC']; 
    $nombreColumna = "RUC"; 

    ComprobarDobles($nombreTabla,"ID",$_REQUEST['ID']);
    ComprobarDobles($nombreTabla,$nombreColumna,$datoEvaluar);

    if($existe == false && $_REQUEST['RUC'] != ""){
        $consulta = "UPDATE ".$nombreTabla." SET NOMBRE = '".$dato2."' , RUC = '".$dato3."' , DIRECCION = '".$dato4."' , TELEFONO = '".$dato5."' , EMAIL = '".$dato6."' , ACTIVO = '".$dato7."' WHERE ID = '".$dato1."'";

    }else{
        $consulta="INSERT INTO TABLA VALUES ('A')";
    }

}else if(strpos($_SERVER["HTTP_REFERER"],"productos")){
    $nombreTabla="productos";
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['PROVEEDOR']; 
    $dato3=$_REQUEST['CATEGORIA']; 
    $dato4=$_REQUEST['NOMBRE']; 
    $dato5=$_REQUEST['STOCK']; 
    $dato6=$_REQUEST['PRECIO']; 
    $dato7=$_REQUEST['ESTADO']; 
    $datoEvaluar = $_REQUEST['NOMBRE']; 
    $nombreColumna = "NOMBRE"; 

    ComprobarDobles($nombreTabla,"ID",$_REQUEST['ID']);
    ComprobarDobles($nombreTabla,$nombreColumna,$datoEvaluar);

    if($existe == false && $_REQUEST['NOMBRE'] != ""){
        $consulta = "UPDATE ".$nombreTabla." SET PROVEEDOR = '".$dato2."' , CATEGORIA = '".$dato3."' , NOMBRE = '".$dato4."' , STOCK = ".$dato5." , PRECIO = ".$dato6." , ESTADO = '".$dato7."' WHERE ID = '".$dato1."'";

    }else{
        $consulta="INSERT INTO TABLA VALUES ('A')";
    }

}else if(strpos($_SERVER["HTTP_REFERER"],"proveedores")){
    $nombreTabla="proveedores";
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['NOMBRE']; 
    $dato3=$_REQUEST['RUC']; 
    $dato4=$_REQUEST['DIRECCION']; 
    $dato5=$_REQUEST['TELEFONO']; 
    $dato6=$_REQUEST['EMAIL']; 
    $dato7=$_REQUEST['ACTIVO']; 
    $datoEvaluar = $_REQUEST['RUC']; 
    $nombreColumna = "RUC"; 

    ComprobarDobles($nombreTabla,"ID",$_REQUEST['ID']);
    ComprobarDobles($nombreTabla,$nombreColumna,$datoEvaluar);

    if($existe == false && $_REQUEST['RUC'] != ""){
        $consulta = "UPDATE ".$nombreTabla." SET NOMBRE = '".$dato2."' , RUC = '".$dato3."' , DIRECCION = '".$dato4."' , TELEFONO = '".$dato5."' , EMAIL = '".$dato6."' , ACTIVO = '".$dato7."' WHERE ID = '".$dato1."'";

    }else{
        $consulta="INSERT INTO TABLA VALUES ('A')";
    }

}else{
    $nombreTabla="NO EXISTE";
}


function ComprobarDobles($tabla,$columna, $dato){
    global $existe;
    global $baseDatos;
    global $consulta;
    // SELECT * FROM USUARIOS WHERE ID NOT IN (SELECT ID FROM USUARIOS WHERE ID = 'US1');
    $consulta = "SELECT ". $columna ." FROM ".$tabla." WHERE ".$columna." NOT IN (SELECT ".$columna." FROM TABLA WHERE ".$columna." = '".$dato."')";
    $resultados = mysqli_query($baseDatos->coneccion, $consulta);
    while(true){
        $fila = mysqli_fetch_row($resultados);
        if($fila){
            if($fila[0] == $dato ){
                $existe = true;
                break;
            }
        }else{
            break;
        }
    }
}





    if(mysqli_query($baseDatos->coneccion, $consulta)){
        header("Location: ../DASHBOARD/".$nombreTabla.".php");
    }else{
        header("Location: ../DASHBOARD/".$nombreTabla.".php");
    }







echo $nombreTabla;
echo"<br>";
echo $_REQUEST['ID'];
echo"<br>";
echo $consulta;
// header("Location: ../DASHBOARD/".$nombreTabla.".php");







?>




