<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora 2</title>

    <script>
        function validarFormulario(){
            const num1 = document.getElementById('num1').value;
            const num2 = document.getElementById('num2').value;
            const operacao = document.getElementById('operacao').value;

            if (num1 === '' || num2 ==='') {
                alert('Preencha todos os campos!');
                return false;
            }

            if (operacao === 'divisao' && num1 == '0' || num2 == '0') {
                alert('Divisão por zero, é ZERO!')
                return false;
            }}
    </script>
    </head>

    <body>
        <h1>Calculadora na prática</h1>

        <form action="teste.php" method="POST" onsubmit="return validarFormulario()">
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'soma':
            $resultado = $num1 + $num2;
            break;
        case 'subtracao':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacao':
            $resultado = $num1 * $num2;
            break;
        case 'divisao':
            $resultado = $num1 / $num2;
            break;
    }

    echo "<h2>O resultado é: $resultado</h2>";

}

?>
    </body>
</html>