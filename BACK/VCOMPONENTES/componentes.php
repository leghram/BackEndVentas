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
        while(TRUE){
            $fila = mysqli_fetch_row($tabla);
            if($fila){
                foreach($fila as $elemento){
                    $registro = $registro . "<p>". $elemento."</p>";
                }
            }else{
                break;
            }
            // $fila = mysqli_fetch_row($tabla);
            // foreach($fila as $dato){
            //     $registro = $registro . "<p>". $dato ."</p>";
            // }
            $registro =$registro."</div><div class='accionesFila'><a  class='btnAcciones btnAct RevisarActualizar'>Actualizar</a><a  class='btnAcciones btnDes' href='../'>Desactivar</a></div>";

            $registros = $registros . $registro . "</div>";

            $linea = $linea . $registros;

            $registros = "<div class='campoRegistros'>"; 
            $registro = "<div class='datosRegistros'>";

        }
        $registros = $registros . "</div>";

        return $linea;
    }



}

// <H3>titulo 1</H3>
// <H3>titulo 2</H3>
// <H3>titulo 3</H3>
// <H3>titulo 4</H3>


// <<<html
//         <div class="zonaRegistros">
//             <div class="campoRegistros">
//                 <div class="datosRegistros">
//                     <!-- AQUI ES IDEAL PARA UN BUCLE PARA CONSEGUIR LOS TITULOS DE LA TABLA -->
                    
//                     <p>titulo 1</p>
//                     <p>titulo 2</p>
//                     <p>titulo 3</p>
//                     <p>titulo 4</p>
//                 </div>
//                 <div class="accionesFila">
//                     <a  class="btnAcciones btnAct" href="../">Actualizar</a>
//                     <a  class="btnAcciones btnDes" href="../">Desactivar</a>
//                 </div>
//             </div>
//         </div>
//         $linea
//         html;





?>




