<?php
//se compueba si existe la cookie
if (isset($_COOKIE['idiomaUsuario'])) {
  //si no existe, se determina como página la destinada a elegir el idioma.
  $pagina = "elegirIdioma.php";
} else if ($_COOKIE['idiomaUsuario'] == "sp") {
  //si existe y el valor es "sp" se ira a la página en español
  $pagina = "spanish.html";
} else {
  //si existe y el valor es "en" se ira a la página en ingles
  $pagina = "english.html";
}
?>

<html>

<head>
  <script language="javascript" type="text/javascript">
    location.href = "<?php echo $pagina; ?>";
  </script>
</head>

<body>
  index taller 9
</body>

</html>