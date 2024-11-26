<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <!-- 
        Questão 3 – Validação de Formulário (2,5 pontos)
Crie um formulário com os campos: Nome (text), Idade (number), Estado (select), Cidade (text), e Sexo (radio).
Valide se todos os campos foram preenchidos. Caso contrário, mostre uma mensagem de erro. Se tudo estiver
preenchido, exiba os dados enviados.
    -->
    <form action="Questao3-exibir.php" method="get">
        <label>Nome:</label>
        <input type="text" name="nome">
        <label>Idade:</label>
        <input type="number" name="idade">
        <label>Estado</label>
        <input type="select" name="estado">
        <label>Cidade</label>
        <input type="text" name="cidade">
        <label>Sexo</label>
        <input type="radio">
    </form>
</body>
</html>