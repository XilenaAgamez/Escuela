
<?php
    $usuario = $_GET['usuario'];
    $password = $_GET['password'];

    if (($usuario == "usuario") AND ($password == "12345")) {
        echo "Bienvenido ".$usuario;
        header("Location: index.html");
    } else {
        echo "¡Usuario o contraseña incorrectos!";  
    }
?>

<html>
   <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="styless/estilos.css">
   </head>

   <body>
      <div id="login">
        <form action= "login.php" method="GET">
            <label>Usuario: </label>
            <input type="text" name="usuario"/><br>
            <label>Contraseña: </label>
            <input type="password" name="password"/><br><br>
            <input type="submit" value="Enviar"/>
        </form>
      </div>
   </body>
</html>