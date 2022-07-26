<?php ob_start();?>
<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: ../");
}
include("../CONFIG/database.php");
include("../VCOMPONENTES/componentes.php");
$vista = "Categorias";

$panel = new Componente();

$baseDatos = new BD();
$consulta = "SELECT * FROM CATEGORIAS";

$resultados = mysqli_query($baseDatos->coneccion, $consulta);
// $fila = mysqli_fetch_row($resultados);

//devuelve un array de objetos con sus propiedades $titulos[1]->name  otro $titulos[2]->type ... etc
$titulos = mysqli_fetch_fields($resultados);



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
                ?>

            </div>

            <!-- modales -->
            <div class = "registros modalAgregar modal">
                <h2 class="tituloModal">Agregar <?php echo $vista?></h2>
                <div>
                    <form action="../includes/insertar.php"  method="POST" class="formModal">
                        <div class="modalRegistros">
                            <?php echo $panel->GenerarFormulario($titulos) ?>
                        </div>
                        <div class="modalBotones">
                            <input type="submit" value="Enviar" class="btnModal btnAgregarModal">
                            <a class="limpiar btnModal" href="../dashboard/categorias.php">Salir</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class = "registros modalActualizar modal">
                <h2 class="tituloModal">Actualizar Registro <?php echo $vista?></h2>
                <div>
                    <form action="../includes/actualizar.php" method="POST" class="formModal" name="ActualizaDatos">
                        <div class="modalRegistros">
                            <?php echo $panel->GenerarFormulario($titulos) ?>
                        </div>
                        <div class="modalBotones">
                            <input type="submit" value="Enviar" class="btnModal btnAgregarModal btnActualizarModal">
                            <a class="limpiar btnModal" href="../dashboard/categorias.php">Salir</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- modales -->


            

        </div>


<?php
include("../VCOMPONENTES/footer.php");
?>
<?php ob_end_flush(); ?>



