<?php
//Se graba una cookie con una validez de 24 horas
setcookie("idiomaUsuario", $_GET["idiomaUsuario"], time() + 60 * 60 * 24);
?>
<html>

<body>
  <script language="javascript" type="text/javascript">
    location.href = "index.php";
  </script>
</body>

</html>