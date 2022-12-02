<?php
session_start();
if (!isset($_SESSION["count"])){
    $_SESSION["count"] = 0;
}
else {
    $_SESSION["count"]++;
}
?>

<html>
    <head>
        <title>Contador de accesos</title>
    </head>
    <body>
        <p>
            <?php
            echo "Hola, has accedido a esta pagina ". $_SESSION["count"] . "veces";
            ?>
            </p>
</body>
</html>