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