<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora 2</title>

    <script src="operation.js"></script>
    </head>

    <body>
        <h1>Calculadora na prática</h1>

        <form action="teste.php" method="POST" onsubmit="return valForm()">
            <label for="num1">Número 1:</label>
            <input type="number" id="num1" name="num1"><br><br>

            <label for="operacao"></label>
            <select name="operacao" id="operacao" required>
                <option value="soma">Somar</option>
                <option value="subtracao">Subtrair</option>
                <option value="multiplicacao">Multiplicar</option>
                <option value="divisao">Dividir</option>
            </select><br><br>

            <label for="num2">Número 2:</label>
            <input type="number" id="num2" name="num2"><br><br>

            <button type="submit">Calcular</button>
        </form>

<?php
include "form.php"
?>

    </body>
</html>