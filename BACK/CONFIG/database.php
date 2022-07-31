<?php
//esta es la base de datos
include("constantes.php");


class BD{


    public $hostDB = HOST; //HOST;
    private $nameDB = NAME_BD;//NAME_BD;
    private $userDB = USER;//USER;
    private $passwordDB = PASSWORD;//PASSWORD;


    public $coneccion;

    function BD(){
        $this->CreateConnection();
    }

    public function CreateConnection(){
        
        $this->coneccion=mysqli_connect("localhost","root","","BACKEND");
        // if(mysqli_connect_error()){
        //     die("consulta fallida");
        // }
    }

    public function LimpiarDato($dato){
        $datoLimpio = mysqli_real_escape_string($this->coneccion,dato);
        return datoLimpio;
    }





}


?>