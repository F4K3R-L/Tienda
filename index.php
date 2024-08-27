<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Total de Compra</title>
</head>
<body>
    <form method="POST" action="">
        <h3>Ingrese los datos de los productos:</h3>

        <label for="precio1">Precio del Producto 1:</label>
        <input type="number" step="0.01" name="precio1" required><br>

        <label for="cantidad1">Cantidad del Producto 1:</label>
        <input type="number" name="cantidad1" required><br><br>

        <label for="precio2">Precio del Producto 2:</label>
        <input type="number" step="0.01" name="precio2" required><br>

        <label for="cantidad2">Cantidad del Producto 2:</label>
        <input type="number" name="cantidad2" required><br><br>

        <label for="precio3">Precio del Producto 3:</label>
        <input type="number" step="0.01" name="precio3" required><br>

        <label for="cantidad3">Cantidad del Producto 3:</label>
        <input type="number" name="cantidad3" required><br><br>

        <button type="submit">Calcular Total</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Capturar datos enviados por el formulario
        $precio1 = (float) $_POST['precio1'];
        $precio2 = (float) $_POST['precio2'];
        $precio3 = (float) $_POST['precio3'];

        $cantidad1 = (int) $_POST['cantidad1'];
        $cantidad2 = (int) $_POST['cantidad2'];
        $cantidad3 = (int) $_POST['cantidad3'];

        // Calcular el subtotal
        $subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

        // Calcular el monto de impuestos (16%)
        $impuestos = $subtotal * 0.16;

        // Calcular el descuento (10%)
        $descuento = $subtotal * 0.10;

        // Calcular el total final
        $totalFinal = $subtotal + $impuestos - $descuento;

        // Mostrar resultados
        echo "<h3>Resumen de la Compra:</h3>";
        echo "Subtotal: $" . number_format($subtotal, 2) . "<br>";
        echo "Impuestos (16%): $" . number_format($impuestos, 2) . "<br>";
        echo "Descuento (10%): -$" . number_format($descuento, 2) . "<br>";
        echo "Total Final: $" . number_format($totalFinal, 2) . "<br>";
    }
    ?>
</body>
</html>
