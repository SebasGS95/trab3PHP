<!DOCTYPE html>
<html>
<body>
    <h3>Calculadora de Gastos de Envío</h3>
    <form method="post" action="">
        <label for="monto">Monton de la Compra (€):</label>
        <input type="number" name="monto" id="monto" required>
        <br>

        <input type="submit" value="Calcular Gastos de Envío">
    </form>
    <?php
    try {
        $montoCompra = isset($_POST["monto"]) ? floatval($_POST["monto"]) : null;

        if ($montoCompra !== null) {
            $gastosEnvio = 0;
            if ($montoCompra < 50) {
                $gastosEnvio = 3.95;
            } elseif ($montoCompra < 75) {
                $gastosEnvio = 2.95;
            } elseif ($montoCompra < 100) {
                $gastosEnvio = 1.95;
            } else {
                $gastosEnvio = 0;
            }

            echo "Cantidad de la Compra: €" . $montoCompra . "<br>";
            echo "Gastos de Envío: €" . $gastosEnvio;

        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

    <h3>Realiza un programa en PHP que resuelva el problema anterior con las sentencias condicionales SWITCH-CASE:</h3>
    <form method="post" action="">
        <label for="monto2">Monton de la Compra (€):</label>
        <input type="number" name="monto2" id="monto2" required>
        <br>

        <input type="submit" value="Calcular Gastos de Envío">
    </form>
    <?php
    try {
        $montoCompra2 = isset($_POST["monto2"]) ? floatval($_POST["monto2"]) : null;

        if ($montoCompra2 !== null) {
            $gastosEnvio2 = 0;
            switch (true) {
                case ($montoCompra2 < 50):
                    $gastosEnvio2 = 3.95;
                    break;
                case ($montoCompra2 < 75):
                    $gastosEnvio2 = 2.95;
                    break;
                case ($montoCompra2 < 100):
                    $gastosEnvio2 = 1.95;
                    break;
                default:
                    $gastosEnvio2 = 0;
                    break;
            }

            echo "Cantidad de la Compra: €" . $montoCompra2 . "<br>";
            echo "Gastos de Envío: €" . $gastosEnvio2;
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
    <h3>Realiza un programa en PHP que calcule el mayor de 5 números mediante bucle FOR. Los 5 números se obtendrán mediante por pantalla mediante un formulario similar al del ejercicio 1:</h3>
    <form method="post" action="">
        <label for="numeros">Numeros:</label>
        <input type="number" name="num1" id="num1" required>
        <input type="number" name="num2" id="num2" required>
        <input type="number" name="num3" id="num3" required>
        <input type="number" name="num4" id="num4" required>
        <input type="number" name="num5" id="num5" required>
        <br>
        <input type="submit" value="Mayor">
    </form>
    <?php
        try {
            $numeros = array();
            $mayor = null;

            for ($i = 1; $i <= 5; $i++) {
                $input_name = "num$i";
                $numero = isset($_POST[$input_name]) ? floatval($_POST[$input_name]) : null;

                if ($numero !== null) {
                    $numeros[] = $numero;
                    if ($mayor === null || $numero > $mayor) {
                        $mayor = $numero;
                    }
                }
            }
            if ($mayor !== null) {
                echo "El número más grande entre los números ingresados es: $mayor";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    ?>
    <h3>Realiza un programa en PHP que muestre por pantalla el contenido de la siguiente matriz utilizando el bucle FOREACH</h3>
    <?php
        $matriz = array(
            array(3, 1),
            array(2, 0)
        );
        
        echo "<h2>Contenido de la Matriz:</h2>";
        echo "<table border='1'>";
        foreach ($matriz as $fila) {
            echo "<tr>";
            foreach ($fila as $elemento) {
                echo "<td>$elemento</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <h3>Realiza un programa en PHP que sume las siguientes matrices y muestre por pantalla el resultado:</h3>
    <?php
$matriz1 = array(
    array(1, 0),
    array(0, 1)
);

$matriz2 = array(
    array(0, 1),
    array(1, 0)
);

// Verificamos que matrices tengan mismas dimensiones
if (count($matriz1) != count($matriz2) || count($matriz1[0]) != count($matriz2[0])) {
    echo "No se pueden sumar.";
} else {
    $resultado = array();

    // Recorremos matrices y sumamos elementos 
    for ($i = 0; $i < count($matriz1); $i++) {
        $fila = array();
        for ($j = 0; $j < count($matriz1[0]); $j++) {
            $suma = $matriz1[$i][$j] + $matriz2[$i][$j];
            $fila[] = $suma;
        }
        $resultado[] = $fila;
    }

    echo "Resultado :<br>";
    for ($i = 0; $i < count($resultado); $i++) {
        for ($j = 0; $j < count($resultado[0]); $j++) {
            echo $resultado[$i][$j] . " ";
        }
        echo "<br>";
    }
}
?>
</body>
</html>
