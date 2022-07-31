<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../CSS/generales.css" rel="stylesheet">
    <link href="../CSS/styleLogin.css" rel="stylesheet">
    <title>SISTEMA DE FACTURACION</title>
</head>
<body>
    <div class="login">
        <form class="loginForm" method="POST" action="./INCLUDES/validar.php">
            <div class="loginInputs">
                <input name="nick" class="entrada in1" placeholder="usuario">
                <input name="pass" class="entrada in2" placeholder="password">
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


</body>
</html>