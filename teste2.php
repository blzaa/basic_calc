<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora 3</title>
        <meta charset="UTF-8">

    <script>
        function valForm(){
            const num1 = document.getElementById('num1').value;
            const num2 = document.getElementById('num2').value;
            const operacao = document.getElementById('operacao').value;

            if (num1 === '' || num2 === ''){
                alert('Preencha todos os campos!');
                return false;
            }

            if (operacao === 'divisao' && num1 == '0' || num2 == '0'){
                alert('Qualquer número dividido por zero, será ZERO!');
                return false;
            }}
    </script>
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

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST ['operacao'];

        switch ($operacao){
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

        echo "<h2>O Resultado é: $resultado<h2>";
    }

?>
    </body>
</html>