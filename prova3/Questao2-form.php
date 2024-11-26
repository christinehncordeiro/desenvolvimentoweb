<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
    <!--Questão 2 - Calculadora
Crie uma calculadora que permita realizar operações de soma, subtração, multiplicação e divisão com dois números inseridos pelo usuário em um formulário. As operações devem estar em um campo do tipo select e os dois números em campos do tipo number. Valide se os campos estão preenchidos antes de realizar a operação.-->
<p>Isso é uma calculadora que deve conseguir realizar operações de soma, subtração, multiplicação e divisão com dois números inseridos por você, usuário.</p>
    <form action="Questao2-exibir.php" method="get">
        <label>Insira um número:</label>
        <input type="number" name="num1">
        <label>Insira um segundo número:</label>
        <input type="number" name="num2">
        <label>Insira uma operação:</label>
        <input type="select" name="operacao">
    </form>
</body>
</html>
