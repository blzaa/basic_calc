<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>

<script>
    function validarFormulario() {
        //Obtem os valores dos campos
        const num1 = document.getElementById('num1').value;
        const num2 = document.getElementById('num2').value;
        const operacao = document.getElementById('operacao').value;

        //Verificar se foram preenchidos

        if (num1 === '' || num2 === '') {
            alert('Por Favor, preencha ambos os números.');
            return false;
        }

        //Verifica se o segundo numero é 0 em caso de divisao
        if (operacao === 'divisao' && num2 == 0 || num1 == 0) {
            alert('Divisão por zero é ZERO!!!');
            return false;
        }
    }
</script>

</head>
<body>
    <h1>Calculadora Simples</h1>

    <form action="index.php" method="POST" onsubmit="return validarFormulario();">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1"><br><br>
     
        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="soma">Somar</option>
            <option value="subtracao">Subtrair</option>
            <option value="multiplicacao">Multiplicar</option>
            <option value="divisao">Divisão</option>
        </select><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2"><br><br>



        <button type="submit">Calcular</button>
    </form>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//obter os dados enviado ao formulátio
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacao = $_POST['operacao'];

// Realiza a operação

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
        if ($num2 == 0){
            echo "Erro: qualquer número dividido por ZERO, é ZERO!";
            exit;
        }
        $resultado = $num1 / $num2;
        break;
    default:
        echo "Erro: operação inválida.";
        exit;
    }

//Retorna o resultado

echo "<h2>Resultado: $resultado</h2>";

}
?>

</body>
</html>