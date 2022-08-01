<?php
include("../CONFIG/database.php");
include("../VCOMPONENTES/componentes.php");
$vista = "Usuarios";

$panel = new Componente();

$baseDatos = new BD();
$consulta = "SELECT * FROM USUARIOS";

//devuelve la tabla de registros coincidentes RESULSET
$resultados = mysqli_query($baseDatos->coneccion, $consulta);
// $fila = mysqli_fetch_row($resultados);

//devuelve un array de objetos con sus propiedades $titulos[1]->name  otro $titulos[2]->type ... etc
$titulos = mysqli_fetch_fields($resultados);

// $listaTitulos=array();

// foreach($titulos as $titulo){
//     array_push($listaTitulos,$titulo);
// }


?>
<?php
include("../VCOMPONENTES/header.php");
?>
        <div class="panelUsuario">
            <!--action=""  -->

            
            <div class="menu">
                <?php
                include("../VCOMPONENTES/opcMenu.php");
                ?>
                <div class="menuOpciones">
                    <button class="btnMenu salir"><a href="../INCLUDES/cerrarsesion.php">SALIR</a></button>
                </div>
            </div>

            <div class = "registros">
                <?php
                    echo $panel->Encabezado($vista);
                    echo $panel->Titulos($titulos);
                    echo $panel->Registros($resultados);
    
                    //echo $panel->Registros($resultados);
                ?>
            </div>

            <div class = "registros modal">
                <?php
                    echo "hola";
    
                    //echo $panel->Registros($resultados);
                ?>
            </div>

            <div class = "registros modal">
                <?php
                    echo "hola";
    
                    //echo $panel->Registros($resultados);
                ?>
            </div>

        </div>


<?php
include("../VCOMPONENTES/footer.php");
?>








