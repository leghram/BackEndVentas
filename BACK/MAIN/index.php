<?php
include("../VCOMPONENTES/header.php");
// <!--HEADER PARA ARRIBA -->
?>
    <div class="login">
        <form class="loginForm" method="POST" action="../VISTAS/Dashboard.php">
            <div class="loginInputs">
                <input class="entrada in1" placeholder="usuario">
                <input class="entrada in2" placeholder="password">
            </div>
            <div class="loginButtons">
                <button class="btnLogin entrar">Iniciar Sesion</button>
                <input class="btnLogin limpiar" type="button" value="Limpiar" 
                onClick='
                const entrada1 = document.querySelector(".in1");
                const entrada2 = document.querySelector(".in2");
                entrada1.value = "";
                entrada2.value = "";
                '>
            </div>
        </form>

    </div>
    <!-- FOOTER PARA ABAJO -->
<?php
include("../VCOMPONENTES/footer.php");
?>
