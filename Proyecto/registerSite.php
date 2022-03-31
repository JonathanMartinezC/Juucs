<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8"/>
     <title>Register site</title>
   </head>
   <body>
    <form action="logica/register.php" method="POST">
            <label for="nameInput"> Nombre: </label> 
            <br>
            <input type="text" id="nameInput" name="newName" required="required">
            <br>
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
            <br> <br>
            <button type="submit"> Entrar </button>
    </form>
    <a href='index.html'> Volver </a>
   </body>
</html>