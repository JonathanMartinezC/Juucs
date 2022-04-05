<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register site</title>
    <link rel="stylesheet" href="./estilos/registro_style.css">
</head>
<body>
    <div class="fondo"></div>
    <div class="fondo2"></div>
    <div class="fondo3"></div>
    <div class="fondo4"></div>
    <header>
        <div class="logo-container">
            <h2 class="logo">JUUCS</h2>
        </div>
    </header>
    <div class="registro">
        <h1>Ingresa los siguientes datos</h1>
        <form class="formulario" action="logica/register.php" method="POST">
            <label for="userInput"> Nombre de usuario: </label> 
            <br>
            <input type="text" id="userInput" name="newUser" required="required">
            <br>
            <label for="emailInput"> Correo electronico: </label>
            <br>
            <input type="email" id="emailInput" name="newEmail" required="required">
            <br>
            <label for="passInput"> Contraseña: </label> 
            <br>
            <input type="password" id="passInput" name="newPassword" required="required">
            <br><br>
            <button type="submit"> Enviar </button>
        </form>
        <p> ¿Ya tienes una cuenta? </p>
        <a href='index.html'> Volver </a>
    </div>
</body>
</html>
