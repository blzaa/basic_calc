<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora 3</title>
        <meta charset="UTF-8">
        <script src="operation.js"></script>
    </head>

    <body>

    <h1>Calculadora na prática 2</h1>

    
    <form action="teste2.php" method="POST" onsubmit="return valForm()">
        <label for="num1">Numero 1:</label>
        <input type="number" id="num1" name="num1"><br><br>

        <label for="operacao">Selecione o método:</label>
        <select id="operacao" name="operacao" required>
            <option value="soma">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao" selected>Divisão</option>
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