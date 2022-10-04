<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Diagnóstico de ritmo cardiaco</h1>
  <form action="test_2.php" method="POST">
    <select name="Sexo" id="sexo">
      <option value="F">Femenina</option>
      <option value="M">Masculino</option>
    </select>
    Edad:<input type="number" name="edad" placeholder="edad">
    Ritmo:<input type="number" name="ritmo" placeholder="ritmo cardiaco">
    <button type="submit">Enviar</button>
  </form>
  <?php
  $edad = $_POST['edad'];
  $ritmo = $_POST['ritmo'];
  $sexo = $_POST['Sexo'];
  if ($sexo == 'F') {
    if ($edad >= 20 && $edad <= 29) {
      if ($ritmo >= 86) {
        echo '
        <p style="color:red;">El ritmo cardiaco es inadecuado</p>
        ';
      } else if ($ritmo >= 70 && $ritmo <= 84) {
        echo
        '<p style="color:orange;">El ritmo cardiaco es normal</p>';
      } else if ($ritmo >= 62 && $ritmo <= 68) {
        echo '<p style="color:darkgreen;">El ritmo cardiaco es bueno</p>';
      } else if ($ritmo <= 60) {
        echo '<p style="color:lime;">El ritmo cardiaco es excelente</p>';
      }
    } else if ($edad >= 30 && $edad <= 39) {
      if ($ritmo >= 86) {
        echo '<p style="color:red;">El ritmo cardiaco es inadecuado</p>';
      } else if ($ritmo >= 72 && $ritmo <= 84) {
        echo '<p style="color:orange;">El ritmo cardiaco es normal</p>';
      } else if ($ritmo >= 64 && $ritmo <= 70) {
        echo '<p style="color:darkgreen;">El ritmo cardiaco es bueno</p>';
      } else if ($ritmo <= 60) {
        echo '<p style="color:lime;">El ritmo cardiaco es excelente</p>';
      }
    } else if ($edad >= 40 && $edad <= 49) {
      if ($ritmo >= 90) {
        echo '<p style="color:red;">El ritmo cardiaco es inadecuado</p>';
      } else if ($ritmo >= 74 && $ritmo <= 88) {
        echo '<p style="color:orange;">El ritmo cardiaco es normal</p>';
      } else if ($ritmo >= 66 && $ritmo <= 72) {
        echo '<p style="color:darkgreen;">El ritmo cardiaco es bueno</p>';
      } else if ($ritmo <= 64) {
        echo '<p style="color:lime;">El ritmo cardiaco es excelente</p>';
      }
    } else if ($edad >= 50) {
      if ($ritmo >= 90) {
        echo '<p style="color:red;">El ritmo cardiaco es inadecuado</p>';
      } else if ($ritmo >= 76 && $ritmo <= 88) {
        echo '<p style="color:orange;">El ritmo cardiaco es normal</p>';
      } else if ($ritmo >= 68 && $ritmo <= 74) {
        echo '<p style="color:darkgreen;">El ritmo cardiaco es bueno</p>';
      } else if ($ritmo <= 66) {
        echo '<p style="color:lime;">El ritmo cardiaco es excelente</p>';
      }
    }
  } else if ($sexo == 'M') {
    if ($edad >= 20 && $edad <= 29) {
      if ($ritmo >= 96) {
        echo '<p style="color:red;">El ritmo cardiaco es inadecuado</p>';
      } else if ($ritmo >= 78 && $ritmo <= 94) {
        echo '<p style="color:orange;">El ritmo cardiaco es normal</p>';
      } else if ($ritmo >= 72 && $ritmo <= 76) {
        echo '<p style="color:darkgreen;">El ritmo cardiaco es bueno</p>';
      } else if ($ritmo <= 70) {
        echo '<p style="color:lime;">El ritmo cardiaco es excelente</p>';
      }
    } else if ($edad >= 30 && $edad <= 39) {
      if ($ritmo >= 98) {
        echo '<p style="color:red;">El ritmo cardiaco es inadecuado</p>';
      } else if ($ritmo >= 80 && $ritmo <= 96) {
        echo '<p style="color:orange;">El ritmo cardiaco es normal</p>';
      } else if ($ritmo >= 72 && $ritmo <= 78) {
        echo '<p style="color:darkgreen;">El ritmo cardiaco es bueno</p>';
      } else if ($ritmo <= 70) {
        echo '<p style="color:lime;">El ritmo cardiaco es excelente</p>';
      }
    } else if ($edad >= 40 && $edad <= 49) {
      if ($ritmo >= 100) {
        echo '<p style="color:red;">El ritmo cardiaco es inadecuado</p>';
      } else if ($ritmo >= 80 && $ritmo <= 98) {
        echo '<p style="color:orange;">El ritmo cardiaco es normal</p>';
      } else if ($ritmo >= 74 && $ritmo <= 78) {
        echo '<p style="color:darkgreen;">El ritmo cardiaco es bueno</p>';
      } else if ($ritmo <= 72) {
        echo '<p style="color:lime;">El ritmo cardiaco es excelente</p>';
      }
    } else if ($edad >= 50) {
      if ($ritmo >= 104) {
        echo '<p style="color:red;">El ritmo cardiaco es inadecuado</p>';
      } else if ($ritmo >= 84 && $ritmo <= 102) {
        echo '<p style="color:orange;">El ritmo cardiaco es normal</p>';
      } else if ($ritmo >= 76 && $ritmo <= 82) {
        echo '<p style="color:darkgreen;">El ritmo cardiaco es bueno</p>';
      } else if ($ritmo <= 74) {
        echo '<p style="color:lime;">El ritmo cardiaco es excelente</p>';
      }
    }
  }
  echo "<br>";
  echo "sexo: " . $sexo . " edad: " . $edad . " ritmo: " . $ritmo;
  ?>

</body>

</html>