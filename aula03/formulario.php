<html>
<head>
    <title>Aula do dia 26/11</title>
</head>
<body>
<?php
    $estadosSigla = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO");
    $estadosExtenso = array("Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Distrito Federal", "Espiríto Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Pará", "Paraíba", "Paraná", "Pernambuco", "Piauí", "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondônia", "Roraima", "Santa Catarina", "São Paulo", "Sergipe", "Tocantins");
?>
    <!-- nome, cidade, data nasc, estado -->
    <h3>formulário</h3>
    <fieldset>
        <form method="get" action="tabela.php" id="filtro">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade">
            <label for="idade">Idade:</label>
            <input type="number" name="idade">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado">
                <?php
                    foreach($estadosSigla as $chave => $valor){
                        echo "<option value='" . $chave . "'>". $valor . "</option>";
                    }
                ?>
            </select>
            <button type="submit" id="Filtar" name="Filtar">Filtar</button>
        </form>
    </fieldset>
</body>
</html>