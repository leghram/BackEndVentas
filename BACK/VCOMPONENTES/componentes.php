<?php

class Componente{

    public $laminaEncabezado;
    public $laminaTitulos;
    public $laminaRegistros;

    function Componente(){

    }


    public function Encabezado($nombre){
        return <<<html
        <div class="encabezado">
            <div>
                <h2 class = "nombreLista">Lista $nombre</h2>
            </div>
            <div>
                <button><a  class="btnAgregar">Agregar</a></button>
            </div>
        </div>
        html;
    } 
    // <button><a  class="btnAgregar" href="../">Agregar</a></button>




    public function Titulos($listaObjetos){
        $titulos = "";

        foreach($listaObjetos as $item){
            $titulos = $titulos . "<h3>". $item->name."</h3>";

        }

        return <<<html
        <div class="campoRegistros">
            <div class="datosRegistros">
                
                <!-- AQUI ES IDEAL PARA UN BUCLE PARA CONSEGUIR LOS TITULOS DE LA TABLA -->
                <!-- LA LISTA DE OBJETOS SE ITERA ARRIBA Y SE OBTIENE UN TEXTO HTML CON LOS TITULOS-->

                $titulos
            </div>
            <div class="acciones">
                <H3>ACCIONES</H3>
            </div>
        </div>
        html;
    }


    public function Registros($tabla){
        $registros = "<div class='campoRegistros'>";
        $registro = "<div class='datosRegistros'>";
        $linea ="<div class='zonaRegistros'>";
        $orden = 1;
        $valores ="";
        while(TRUE){
            $fila = mysqli_fetch_row($tabla);
            $orden =1;
            if($fila){
                foreach($fila as $elemento){
                    $registro = $registro . "<p>". $elemento."</p>";
                    if($orden ==1){
                        $valores = $valores . "" .$elemento;
                        $orden++;
                    }else{
                        $valores = $valores . "-" .$elemento;
                        $orden++;
                    }
                    
                }
            }else{
                break;
            }
            // $fila = mysqli_fetch_row($tabla);
            // foreach($fila as $dato){
            //     $registro = $registro . "<p>". $dato ."</p>";
            // }
            $registro =$registro."</div><div class='accionesFila'><a  class='btnAcciones btnAct' data-valores = '".$valores."'>Actualizar</a><a  class='btnAcciones btnDes' href='../'>Eliminar</a></div>";
            

            $registros = $registros . $registro . "</div>";

            $linea = $linea . $registros;

            $registros = "<div class='campoRegistros'>"; 
            $registro = "<div class='datosRegistros'>";
            $valores ="";

        }
        $registros = $registros . "</div>";

        return $linea;
    }


    public function GenerarFormulario($listaObjetos){
        $titulos = "";
        $inputs="";
        foreach($listaObjetos as $item){
            $titulos = $titulos . "<h3 class='nombreCampo'>". $item->name."</h3>";
            $inputs = $inputs ."<input class='datoCampo' type='text' name = '".$item->name."'>";
        }

        $titulos = "<div class='camposModal'>". $titulos . "</div>";
        $inputs = "<div class='escribirModal'>" . $inputs . "</div>";

                        

        

        return ($titulos . $inputs);
    }


}





?>




