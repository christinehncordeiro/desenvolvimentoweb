<?PHP
$operacoes = array ('opcoes' => array('soma' => "+", 'subtracao' => "-", 'multiplicacao' => "x", 'divisao' => "/" ));
function opcoesOperacoes($chave){
//type select name operacao
    "<select id='" . $chave . "name='" . $chave . "required>";
    foreach($chave['opcoes'] as $chavinha => $valorzin){
        echo "<option value='" . $chavinha . ">" . $valorzin . "</option>";
    }
}
function resolverOperacao($num1, $num2, $operacoes){
    opcoesOperacoes($operacoes);
    if ($operacoes['opcoes']=='soma'){
        echo $num1 + $num2;
    }
    if ($operacoes['opcoes']=='subtracao'){
        echo $num1 - $num2;
    }
    if ($operacoes['opcoes']=='multiplicacao'){
        echo $num1 * $num2;
    }
    if ($operacoes['opcoes']=='divisao'){
        echo $num1 / $num2;
    }
}
if(!empty($_GET["num1"])||(!empty($_GET["num2"]))||(!empty($_GET["operacao"]))){
    resolverOperacao($num1, $num2, $operacoes);
}
?>