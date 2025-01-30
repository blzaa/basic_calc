<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora 3</title>
        <meta charset="UTF-8">
        <script src="operation.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-dark">

    <div class="container mt-5">
            <h1 class="text-center mb-4">Calculadora na prática 2</h1>

            <form action="teste2.php" method="POST" onsubmit="return valForm()" class="p-4 bg-white rounded shadow-sm">

                <!-- Número 1 -->
                <div class="mb-3">
                    <label for="num1" class="form-label">Número 1:</label>
                    <input type="number" id="num1" name="num1" class="form-control" required>
                </div>

                <!-- Operação -->
                <div class="mb-3">
                    <label for="operacao" class="form-label">Selecione o método:</label>
                    <select id="operacao" name="operacao" class="form-select" required>
                        <option value="soma">Adição</option>
                        <option value="subtracao">Subtração</option>
                        <option value="multiplicacao">Multiplicação</option>
                        <option value="divisao" selected>Divisão</option>
                    </select>
                </div>

                <!-- Número 2 -->
                <div class="mb-3">
                    <label for="num2" class="form-label">Número 2:</label>
                    <input type="number" id="num2" name="num2" class="form-control" required>
                </div>

                <!-- Botão -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </form>

            <div class="mt-4">
                <?php include "form.php" ?>
            </div>
        </div>

        <!-- Link do Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>