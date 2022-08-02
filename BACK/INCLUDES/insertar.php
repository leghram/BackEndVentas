<?php


if(strpos($_SERVER["HTTP_REFERER"],"usuarios")){
    echo "pertenece a USUARIOS";
}else if(strpos($_SERVER["HTTP_REFERER"],"categorias")){
    echo "no CATEGORIAS";
}else if(strpos($_SERVER["HTTP_REFERER"],"clientes")){
    echo "no CLIENTES";
}else if(strpos($_SERVER["HTTP_REFERER"],"productos")){
    echo "no PRODUCTOS";
}else if(strpos($_SERVER["HTTP_REFERER"],"proveedores")){
    echo "no PROVEEDORES";
}else{
    echo "no se encontro la direccion";
}






// echo $_SERVER["HTTP_REFERER"];

// echo "hola llegaste";


?>