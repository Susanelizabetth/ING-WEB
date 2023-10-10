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
        <p>Ronaldo Rodriguez</p>
        <p>8-968-509</p>
    </div>
    <h4>1. Realice un programa que calcule el sueldo que le corresponde al trabajador de una empresa que cobra $40.000
        anuales, el programa debe realizar los cálculos en función de los siguientes criterios:
    </h4>
    <ol>
        <li>Si lleva más de 10 años en la empresa se le aplica un aumento del 10%.</li>
        <li>Si lleva menos de 10 años pero más que 5 se le aplica un aumento del 7%.</li>
        <li>Si lleva menos de 5 años pero más que 3 se le aplica un aumento del 5%.</li>
        <li>Si lleva menos de 3 años se le aplica un aumento del 3%.</li>
    </ol>
    <form method="post" action="">
        <label for="salario">Salario Anual:</label>
        <input type="text" name="salario" id="salario" value="<?php echo isset($_POST['salario']) ? $_POST['salario'] : '40000'; ?>">
        <br>
        <label for="anios_empresa">Años en la Empresa:</label>
        <input type="text" name="anios_empresa" id="anios_empresa" value="<?php echo isset($_POST['anios_empresa']) ? $_POST['anios_empresa'] : '5'; ?>">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <br>
    
    <?php
    if(isset($_POST['salario']) && isset($_POST['anios_empresa'])){
        $salario_anual = floatval($_POST['salario']);
        $anios_empresa = intval($_POST['anios_empresa']);
        $aumento = 0;
        
        if ($anios_empresa > 10) {
            $aumento = 0.10; // 10% de aumento para más de 10 años en la empresa
        } elseif ($anios_empresa > 5) {
            $aumento = 0.07; // 7% de aumento para más de 5 años en la empresa
        } elseif ($anios_empresa > 3) {
            $aumento = 0.05; // 5% de aumento para más de 3 años en la empresa
        } else {
            $aumento = 0.03; // 3% de aumento para menos de 3 años en la empresa
        }

        $nuevo_salario = $salario_anual * (1 + $aumento);
        
        echo "<p>Salario Anual original: $salario_anual</p>";
        echo "<p>Años en la Empresa: $anios_empresa</p>";
        echo "<p>Aumento aplicado: " . ($aumento * 100) . "%</p>";
        echo "<strong>Nuevo Salario Anual: $nuevo_salario</strong>";
    }
    ?>
    <br>
    <hr>

    <h4>2.	Cree un programa que permita calcular el salario semanal de unos empleados a los que se les paga $15 por hora si éstas no superan las 35 horas. Cada hora por encima de 35 se considerará extra y se paga a $22. El programa debe pedir las horas trabajadas por el trabajador y devolver el salario que se le debe pagar </h4>

    <form method="post" action="">
        <label for="horas_trabajadas">Horas Trabajadas:</label>
        <input type="text" name="horas_trabajadas" id="horas_trabajadas">
        <br>
        <input type="submit" value="Calcular Salario">
    </form>
    <br>
    <?php
    if(isset($_POST['horas_trabajadas'])){
        $horas_trabajadas = floatval($_POST['horas_trabajadas']);
        $tarifa_normal = 15; // Tarifa por hora normal
        $tarifa_extra = 22;  // Tarifa por hora extra
        $salario_semanal = 0;
        
        if ($horas_trabajadas <= 35) {
            $salario_semanal = $horas_trabajadas * $tarifa_normal;
        } else {
            $horas_normales = 35;
            $horas_extra = $horas_trabajadas - 35;
            $salario_semanal = ($horas_normales * $tarifa_normal) + ($horas_extra * $tarifa_extra);
        }
        
        echo "<p>Horas Trabajadas: $horas_trabajadas</p>";
        echo "<p>Salario Semanal: $salario_semanal</p>";
    }
    ?>
<br>
    <hr>

    <h4>3. En una librería se venden artículos con las siguientes condiciones:  </h4>
    <ol>
        <li>Sí el cliente es de tipo 1 se le descuenta 30%</li>
        <li>Sí el cliente es de tipo 2 se le descuenta 20%</li>
        <li>Sí el cliente es de tipo 3 se le descuenta 10%</li>
    </ol>
    <h4>Escribir un algoritmo que almacene en variables el nombre del cliente, tipo de cliente y precio del artículo. Además permitir que realice el cálculo del pago final que el cliente debe realizar y lo muestre en pantalla. </h4>
    <h4>NOTA: los porcentajes de descuento deben ser declarados como constantes.</h4>
    <br>

    <form method="post" action="">
        <label for="nombre_cliente">Nombre del Cliente:</label>
        <input type="text" name="nombre_cliente" id="nombre_cliente">
        <br>
        <label for="tipo_cliente">Tipo de Cliente (1, 2 o 3):</label>
        <input type="text" name="tipo_cliente" id="tipo_cliente">
        <br>
        <label for="precio_articulo">Precio del Artículo:</label>
        <input type="text" name="precio_articulo" id="precio_articulo">
        <br>
        <input type="submit" value="Calcular Precio Final">
    </form>
    <br>
    <?php
    define("DESCUENTO_TIPO1", 0.30); // 30% de descuento para tipo de cliente 1
    define("DESCUENTO_TIPO2", 0.20); // 20% de descuento para tipo de cliente 2
    define("DESCUENTO_TIPO3", 0.10); // 10% de descuento para tipo de cliente 3
    
    if(isset($_POST['nombre_cliente']) && isset($_POST['tipo_cliente']) && isset($_POST['precio_articulo'])){
        $nombre_cliente = $_POST['nombre_cliente'];
        $tipo_cliente = intval($_POST['tipo_cliente']);
        $precio_articulo = floatval($_POST['precio_articulo']);
        $descuento = 0;
        
        switch ($tipo_cliente) {
            case 1:
                $descuento = DESCUENTO_TIPO1;
                break;
            case 2:
                $descuento = DESCUENTO_TIPO2;
                break;
            case 3:
                $descuento = DESCUENTO_TIPO3;
                break;
            default:
                $descuento = 0; // No se aplica descuento si el tipo de cliente es desconocido
        }
        
        $precio_final = $precio_articulo - ($precio_articulo * $descuento);
        
        echo "<p>Nombre del Cliente: $nombre_cliente</p>";
        echo "<p>Tipo de Cliente: $tipo_cliente</p>";
        echo "<p>Precio del Artículo: $precio_articulo</p>";
        echo "<p>Descuento Aplicado: " . ($descuento * 100) . "%</p>";
        echo "<p>Precio Final: $precio_final</p>";
    }
    ?>
<br>
<hr>

<h4>4.	Elabore un programa en el que se le solicite a un usuario el mes y el día de su cumpleaños, el programa debe determine su signo zodiacal e imprimirlo en pantalla.</h4>

<form method="post" action="">
<label for="mes_cumpleanos">Mes de Cumpleaños (Número):</label>
        <input type="number" name="mes_cumpleanos" id="mes_cumpleanos" min="1" max="12">
        <br>
        <label for="dia_cumpleanos">Día de Cumpleaños (Número):</label>
        <input type="number" name="dia_cumpleanos" id="dia_cumpleanos" min="1" max="31">
        <br>
        <input type="submit" value="Determinar Signo Zodiacal">
    </form>
    
    <?php
    if(isset($_POST['mes_cumpleanos']) && isset($_POST['dia_cumpleanos'])){
       
        
    
            $dia_cumpleanos = $_POST['dia_cumpleanos'];
            $mes_cumpleanos = $_POST['mes_cumpleanos'];
            $signo_zodiacal = '';


            if (($mes_cumpleanos == 3 && $dia_cumpleanos >= 21) || ($mes_cumpleanos == 4 && $dia_cumpleanos <= 19)) {
                $signo_zodiacal = 'Aries';
            } elseif (($mes_cumpleanos == 4 && $dia_cumpleanos >= 20) || ($mes_cumpleanos == 5 && $dia_cumpleanos <= 20)) {
                $signo_zodiacal = 'Tauro';
            } elseif (($mes_cumpleanos == 5 && $dia_cumpleanos >= 21) || ($mes_cumpleanos == 6 && $dia_cumpleanos <= 20)) {
                $signo_zodiacal = 'Géminis';
            } elseif (($mes_cumpleanos == 6 && $dia_cumpleanos >= 21) || ($mes_cumpleanos == 7 && $dia_cumpleanos <= 22)) {
                $signo_zodiacal = 'Cáncer';
            } elseif (($mes_cumpleanos == 7 && $dia_cumpleanos >= 23) || ($mes_cumpleanos == 8 && $dia_cumpleanos <= 22)) {
                $signo_zodiacal = 'Leo';
            } elseif (($mes_cumpleanos == 8 && $dia_cumpleanos >= 23) || ($mes_cumpleanos == 9 && $dia_cumpleanos <= 22)) {
                $signo_zodiacal = 'Virgo';
            } elseif (($mes_cumpleanos == 9 && $dia_cumpleanos >= 23) || ($mes_cumpleanos == 10 && $dia_cumpleanos <= 22)) {
                $signo_zodiacal = 'Libra';
            } elseif (($mes_cumpleanos == 10 && $dia_cumpleanos >= 23) || ($mes_cumpleanos == 11 && $dia_cumpleanos <= 21)) {
                $signo_zodiacal = 'Escorpio';
            } elseif (($mes_cumpleanos == 11 && $dia_cumpleanos >= 22) || ($mes_cumpleanos == 12 && $dia_cumpleanos <= 21)) {
                $signo_zodiacal = 'Sagitario';
            } elseif (($mes_cumpleanos == 12 && $dia_cumpleanos >= 22) || ($mes_cumpleanos == 1 && $dia_cumpleanos <= 19)) {
                $signo_zodiacal = 'Capricornio';
            } elseif (($mes_cumpleanos == 1 && $dia_cumpleanos >= 20) || ($mes_cumpleanos == 2 && $dia_cumpleanos <= 18)) {
                $signo_zodiacal = 'Acuario';
            } elseif (($mes_cumpleanos == 2 && $dia_cumpleanos >= 19) || ($mes_cumpleanos == 3 && $dia_cumpleanos <= 20)) {
                $signo_zodiacal = 'Piscis';
            } else {
                $signo_zodiacal = 'Fecha de cumpleaños no válida';
            }
            echo "<br>";
            echo "<p>Signo Zodiacal: $signo_zodiacal</p>";
       
    }
    ?>
<br>
<hr>
<h4>5.	Elabore un programa que determine el índice de masa corporal (IMC) de una persona de acuerdo a los rangos indicados en la imagen.
</h4>
<img src="Imagen_1.png" alt="">

<br>
<form method="post" action="">
        <label for="peso">Peso (kg):</label>
        <input type="text" name="peso" id="peso">
        <br>
        <label for="altura">Altura (m):</label>
        <input type="text" name="altura" id="altura">
        <br>
        <input type="submit" value="Calcular IMC">
    </form>
    <br>
    
    <?php
    if(isset($_POST['peso']) && isset($_POST['altura'])){
        $peso = floatval($_POST['peso']);
        $altura = floatval($_POST['altura']);
        $imc = $peso / ($altura * $altura);
        $resultado = '';

        if ($imc < 18.5) {
            $resultado = 'POR DEBAJO';
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            $resultado = 'SALUDABLE';
        } elseif ($imc >= 25 && $imc <= 29.9) {
            $resultado = 'SOBREPESO';
        } else {
            $resultado = 'OBESIDAD';
        }

        echo "<p>Peso (kg): $peso</p>";
        echo "<p>Altura (m): $altura</p>";
        echo "<p>IMC: $imc</p>";
        echo "<p>Rango: $resultado</p>";
    }
    ?>
<br>
<hr>
<h4>6.	Elabore un programa que permita determinar la cantidad de números múltiplos de 3 o de 5 comprendidos entre un rango de valores indicado por el usuario, para ello el usuario debe ingresar los topes inferior y superior del rango de valores.</h4>
<form method="post" action="">
        <label for="limite_inferior">Límite Inferior:</label>
        <input type="text" name="limite_inferior" id="limite_inferior">
        <br>
        <label for="limite_superior">Límite Superior:</label>
        <input type="text" name="limite_superior" id="limite_superior">
        <br>
        <input type="submit" value="Calcular Múltiplos">
    </form>
    <br>
    <?php
    if(isset($_POST['limite_inferior']) && isset($_POST['limite_superior'])){
        $limite_inferior = intval($_POST['limite_inferior']);
        $limite_superior = intval($_POST['limite_superior']);
        $cantidad_multiplos = 0;

        for ($numero = $limite_inferior; $numero <= $limite_superior; $numero++) {
            if ($numero % 3 == 0 || $numero % 5 == 0) {
                $cantidad_multiplos++;
            }
        }

        echo "<p>Límite Inferior: $limite_inferior</p>";
        echo "<p>Límite Superior: $limite_superior</p>";
        echo "<p>Cantidad de Múltiplos de 3 o 5: $cantidad_multiplos</p>";
    }
    ?>

<br>
<hr>
<h4>7. Mostrar una tabla rellenado con los números del 1 al 100.</h4>
<table border="1">
        <?php
        $num_inicio = 1;
        $num_final = 100;
        $columnas = 10;

        for ($i = $num_inicio; $i <= $num_final; $i += $columnas) {
            echo "<tr>";
            for ($j = $i; $j < $i + $columnas && $j <= $num_final; $j++) {
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

<br>
<hr>
<h4>8.	Realice una sentencia repetitiva que pida al usuario en un formulario un número y muestre la suma de los siguientes 10 números posteriores.</h4>
<form method="post" action="">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" id="numero">
        <input type="submit" value="Calcular Suma">
    </form>
    
    <?php
    if(isset($_POST['numero'])){
        $numero = intval($_POST['numero']);
        $suma = 0;

        for ($i = $numero + 1; $i <= $numero + 10; $i++) {
            $suma += $i;
        }

        echo "<p>Número Ingresado: $numero</p>";
        echo "<p>La suma de los siguientes 10 números posteriores es: $suma</p>";
    }
    ?>

<br>
<hr>
<h4>9.	Ingresar un numero y mostrar su tabla de multiplicar.</h4>
<form method="post" action="">
        <label for="numero1">Ingrese un número:</label>
        <input type="text" name="numero1" id="numero1">
        <input type="submit" value="Mostrar Tabla">
    </form>
    
    <?php
    if(isset($_POST['numero1'])){
        $numero = intval($_POST['numero1']);

        echo "<h2>Tabla de Multiplicar del $numero</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>= $resultado</td></tr>";
        }
        echo "</table>";
    }
    ?>
    <br>
    <hr>
    <h4>10.	Elabore un programa que permita calcular el factorial de un número ingresado por el usuario. En términos matemáticos, un factorial es el producto de todos los números enteros positivos desde 1 hasta n</h4>
    <form method="post" action="">
        <label for="numero2">Ingrese un número:</label>
        <input type="text" name="numero2" id="numero2">
        <input type="submit" value="Calcular Factorial">
    </form>
    
    <?php
    if(isset($_POST['numero2'])){
        $numero = intval($_POST['numero2']);
        $factorial = 1;

        if ($numero < 0) {
            echo "<p>El factorial no está definido para números negativos.</p>";
        } else {
            for ($i = 1; $i <= $numero; $i++) {
                $factorial *= $i;
            }

            echo "<p>El factorial de $numero es: $factorial</p>";
        }
    }
    ?>

</body>

</html>