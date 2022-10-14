<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registrados</title>
    </head>
    <body>
        <?php
       session_start();
        if(!isset($_SESSION["usuario"])){
            header("location:index.php");
        }
        ?>
    <h1>Bienvenidos Usuarios</h1>
        <?php
        echo "Hola: " . $_SESSION["usuario"]."<br>"
        ?>
        <p>Esta es una información restringida para los usuarios registrados</p>
        <a href="cierre.php">CIERRA SESIÓN </a>
    </body>
</html>