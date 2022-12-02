<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laboratorio 7</title>
</head>
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 40px 80px;
  }

  p,
  h1 {
    margin: 0;
  }

  .head {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
  }
</style>

<body>
  <div class="head">
    <h1>Laboratorio 7</h1>
    <p>Susana Castillo</p>
    <p>8-968-509</p>
  </div>
  <h4>1. Imprimir los valores del siguiente arreglo asociativo usando la sentencia foreach</h4>
  <?php
  $v[1] = 90;
  $v[30] = 7;
  $v['e'] = 99;
  $v['hola'] = 43;
  foreach ($v as $key => $value) {
    echo "El valor de la posición $key es $value <br>";
  }
  ?>
  <hr>
  <h4>2. Realizar un programa que muestre la cantidad de peliculas que se han visto por mes. Crear un arreglo que contenga los meses de enero, febrero, marzo y abril, asignando los valores 9, 12, 0 y 17 respectivamente. Si en alguno de los meses no se ha visto ninguna película no se debe mostrar la información de ese mes.</h4>
  <?php
  $meses = array(
    'Enero' => 9,
    'Febrero' => 12,
    'Marzo' => 0,
    'Abril' => 17
  );
  foreach ($meses as $key => $value) {
    if ($value != 0) {
      echo "En el mes de $key se han visto $value peliculas <br>";
    }
  }
  ?>
  <hr>
  <h4>3. Declare un arreglo asociativo para introducir los datos de la siguientes 4 personas:
    Mostar los datos en pantalla</h4>
  <?php
  $personas = array(
    'Luis' => array(
      'Apellido' => 'Perez',
      'Edad' => 25
    ),
    'Ana' => array(
      'Apellido' => 'Moreno',
      'Edad' => 31
    ),
    'Natalia' => array(
      'Apellido' => 'Garcia',
      'Edad' => 29
    ),
    'Javier' => array(
      'Apellido' => 'Gonzalez',
      'Edad' => 33
    )
  );
  foreach ($personas as $key => $value) {
    echo "Nombre: $key <br>";
    foreach ($value as $key2 => $value2) {
      echo "$key2: $value2 <br>";
    }
    echo "<br>";
  }
  ?>
  <hr>
  <h4>4. Declare un arreglo iterativo con las ciudades: Madrid, Barcelona, Londres, Nueva York, Los Ángeles y Chicago. A continuación muestre el contenido del arreglo haciendo un recorrido diciendo el valor correspondiente a cada índice. Ejemplo: La ciudad con el índice 0 tiene el nombre de Madrid.</h4>
  <?php
  $ciudades = array('Madrid', 'Barcelona', 'Londres', 'Nueva York', 'Los Ángeles', 'Chicago');
  foreach ($ciudades as $key => $value) {
    echo "La ciudad con el índice $key tiene el nombre de $value <br>";
  }
  ?>
  <hr>
  <h4>5. Repita el ejercicio anterior utilizando key para los índices. Ejemplo: La ciudad con el índice MD tiene el nombre de Madrid.</h4>
  <?php
  $ciudades = array('MD' => 'Madrid', 'BCN' => 'Barcelona', 'LD' => 'Londres', 'NY' => 'Nueva York', 'LA' => 'Los Ángeles', 'CH' => 'Chicago');
  foreach ($ciudades as $key => $value) {
    echo "La ciudad con el índice $key tiene el nombre de $value <br>";
  }
  ?>
  <hr>
  <h4>6. Queremos almacenar en una matriz el número de alumnos con el que cuenta un centro de lenguas, ordenados en función del nivel y del idioma que se estudia. Tendremos 3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3 = Portugues). Se pide realizar la declaración de la matriz y asignarle los valores indicados en la siguiente imagen a cada elemento.</h4>
  <?php
  $matriz = array(
    array(1, 14, 8, 3),
    array(6, 19, 7, 2),
    array(3, 13, 4, 1)
  );
  $idiomas = array('Inglés', 'Francés', 'Alemán', 'Portugues');
  foreach ($matriz as $key => $value) {
    echo "Nivel $key <br>";
    foreach ($value as $key2 => $value2) {
      echo "Idioma $key2 => $idiomas[$key2]: $value2 <br>";
    }
    echo "<br>";
  }
  ?>
</body>

</html>