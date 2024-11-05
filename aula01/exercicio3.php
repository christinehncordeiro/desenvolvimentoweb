<?PHP
$dadosProduto=array(
    array('produto'=>'ovo','fabricante'=>'galinheiro','preco'=>30),
    array('produto'=>'queijo','fabricante'=>'queijaria','preco'=>10.30),
    array('produto'=>'leite','fabricante'=>'leiteria','preco'=>6.50)    
);
?>
<html>
    <head>
    </head>
    <body>
        <?php
        $MontarTabela=function ($dados): string{
            $retorno = "<table><tr><th>Produto</th><th>Fabricante</th><th>Preço</th></tr>";
            foreach($dados as $i){
                $retorno .= "<tr><td>".$i['nome']."</td>".
                "<td>".$i['idade']."</td>".
                "<td>" . $i['cidade']."</td></tr>";
            }
            $retorno .= "</table>";
            return $retorno;
        };
        echo $MontarTabela($dadosProduto);
        ?>
    </body>
</html>

