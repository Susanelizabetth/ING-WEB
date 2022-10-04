<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo "This message is from server side." ?></h1>
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="apellido" placeholder="apellido">

    <button id="btn">Enviar</button>
    <?php include 'footer.php' ?>
    <?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    echo $nombre;
    echo $apellido;
    ?>
</body>

</html>