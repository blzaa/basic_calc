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