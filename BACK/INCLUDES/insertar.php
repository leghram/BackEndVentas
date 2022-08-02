<?php
include("../CONFIG/database.php");

$baseDatos = new BD();
$existe = false;

$consulta;

$nombreTabla;
$nombreColumna;
$datoEvaluar;
$dato1="";
$dato2="";
$dato3="";
$dato4="";
$dato5="";
$dato6="";
$dato7="";
$dato8="";
$dato9="";



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

    if($existe == false){
        $consulta = "INSERT INTO ".$nombreTabla." VALUES ('".$dato1."','".$dato2."','".$dato3."','".$dato4."','".$dato5."','".$dato6."','".$dato7."')";
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

    if($existe == false){
        $consulta = "INSERT INTO ".$nombreTabla." VALUES ('".$dato1."','".$dato2."','".$dato3."')";
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

    if($existe == false){
        $consulta = "INSERT INTO ".$nombreTabla." VALUES ('".$dato1."','".$dato2."','".$dato3."','".$dato4."','".$dato5."','".$dato6."','".$dato7."')";
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

    if($existe == false){
        $consulta = "INSERT INTO ".$nombreTabla." VALUES ('".$dato1."','".$dato2."','".$dato3."','".$dato4."',".$dato5.",".$dato6.",'".$dato7."')";
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

    if($existe == false){
        $consulta = "INSERT INTO ".$nombreTabla." VALUES ('".$dato1."','".$dato2."','".$dato3."','".$dato4."','".$dato5."','".$dato6."','".$dato7."')";
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
    $consulta = "SELECT ". $columna ." FROM ".$tabla;
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

function InsertarRegistro($tabla){

}




if($_REQUEST['ID']==""){

    header("Location: ../DASHBOARD/".$nombreTabla.".php");
}else{
    if(mysqli_query($baseDatos->coneccion, $consulta)){
        header("Location: ../DASHBOARD/".$nombreTabla.".php");
    }else{
        header("Location: ../DASHBOARD/".$nombreTabla.".php");
    }
}





echo "<br>";
echo $consulta;










?>






<!-- 

function ObtenerDatosUsuarios(){
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['NICK']; 
    $dato3=$_REQUEST['PASSWORD']; 
    $dato4=$_REQUEST['NOMBRE']; 
    $dato5=$_REQUEST['APELLIDOS']; 
    $dato6=$_REQUEST['EMAIL']; 
    $dato7=$_REQUEST['ACTIVO'];   
}
function ObtenerDatosCategorias(){
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['NOMBRE']; 
    $dato3=$_REQUEST['ACTIVO']; 
}
function ObtenerDatosClientes(){
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['NOMBRE']; 
    $dato3=$_REQUEST['RUC']; 
    $dato4=$_REQUEST['DIRECCION']; 
    $dato5=$_REQUEST['TELEFONO']; 
    $dato6=$_REQUEST['EMAIL']; 
    $dato7=$_REQUEST['ACTIVO'];   
}
function ObtenerDatosProductos(){
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['PROVEEDOR']; 
    $dato3=$_REQUEST['CATEGORIA']; 
    $dato4=$_REQUEST['NOMBRE']; 
    $dato5=$_REQUEST['STOCK']; 
    $dato6=$_REQUEST['PRECIO']; 
    $dato7=$_REQUEST['ESTADO'];   
}

function ObtenerDatosProveedores(){
    $dato1=$_REQUEST['ID'];
    $dato2=$_REQUEST['NOMBRE']; 
    $dato3=$_REQUEST['RUC']; 
    $dato4=$_REQUEST['DIRECCION']; 
    $dato5=$_REQUEST['TELEFONO']; 
    $dato6=$_REQUEST['EMAIL']; 
    $dato7=$_REQUEST['ACTIVO'];   
}

function ObtenerDatosCategorias(){
    global $dato1;
    $dato1=$_REQUEST['ID'];

    global $dato2;
    $dato2=$_REQUEST['NOMBRE']; 

    global $dato3;
    $dato3=$_REQUEST['ACTIVO'];  
}







 -->



