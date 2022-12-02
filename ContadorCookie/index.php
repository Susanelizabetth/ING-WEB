<?php
if (isset($_COOKIE['contador'])) {
  //si queremos que caduque en un año
  //setcookie("contador", $_COOKIE['contador']+1, time()+60*60*24*365);
  $mensaje = "Número de visitas: " . $_COOKIE['contador'];
} else {
  setcookie('contador', 1);
  $mensaje = "Bienvenido a nuestra web";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Contador de visitas</title>
</head>

<body>
  <h1><?php echo $mensaje; ?></h1>

</html>