<?php 
session_start();

if (!isset($_SESSION["bgcol"])) {
    $_SESSION["bgcol"] = 0;
}

if (!isset($_SESSION["textCol"])) {
    $_SESSION["textCol"] = 0;
}

if(isset($_REQUEST["enviar"])) {
    $bgCol = traduce($_REQUEST["nbgCol"]);
    $textCol = traduce($_REQUEST["ntextCol"]);
    $_SESSION["bgCol"] = $bgCol;
    $_SESSION["textCol"] = $tectCol;
    print "<html>\n<head>\n<title>Elección de Colores</title>\n</head>\n";
    print ("<body bgcolor=\"$bgCol\" text=\"$textCol\">");
} else {
    print "<html>\n<head>\n<title>Elección de colores</title>\n</head>\n<body>";
}

function traduce($color) {
    switch ($color) {
        case "rojo"      : return "red";
        case "verde"     : return "green";
        case "azul"      : return "blue";
        case "cian"      : return "cyan";
        case "amarillo"  : return "yellow";
    }
}
?>

<h2>Elige tus colores favoritos</h2>
<form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="post">
    <p> Color de Fondo:
        <select name="nbgCol">
            <option>rojo</option>
            <option>verde</option>
            <option>azul</option>
            <option>cian</option>
            <option>amarillo</option>
    </select></p>
    <hr>

    <p> Color de Texto:
        <select name="ntextCol">
            <option>rojo</option>
            <option>verde</option>
            <option>azul</option>
            <option>cian</option>
            <option>amarillo</option>
    </select></p>
    <p><input type="submit" name="enviar"></p>
</form>
</body>
</hmtl>
    
