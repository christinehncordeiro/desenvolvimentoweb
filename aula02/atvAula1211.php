<?php
$formulario = array(
    'id'=>'formCadastro',
    'tipo_submit'=>'POST', 
    'url_submit'=>'cadastro.php', 
    'itens'=> array(
        'nome'=>array('tipo'=> 'text', 'nome'=> 'nome', 'label'=> 'Nome', 'placeholder'=> 'Informe seu nome.'),
        'idade'=>array('tipo'=> 'number', 'nome'=> 'idade', 'label'=> 'Idade', 'placeholder'=> 'Informe sua idade.', 'funcao_validacao'=> 'validaIdade'),
        'sexo'=>array('tipo'=> 'radio', 'nome'=> 'sexo', 'label'=> 'Sexo', 'opcoes'=> array("M"=> "Masculino", "F"=>"Feminino", "O"=>"Outros")),
       'esporte_preferido'=>array('tipo'=> 'checkbox', 'nome'=> 'esporte_preferido', 'label'=> 'Esporte Pref.', 'opcoes'=> array("F"=> "Futebol", "V"=>"Vôlei", "N"=>"Natação", "O"=> "Outros"), 'obrigatorio'=>false, "valor_padrao"=> array("F", "N")),
        'cidade_nascimento'=>array('tipo'=> 'text', 'nome'=> 'cidade', 'label'=> 'Cidade de Nasc.', 'placeholder'=> 'Informe a cidade que você nasceu.'),
        'estado_nascimento'=>array('tipo'=> 'select', 'nome'=> 'estado_nascimento', 'label'=> 'Estado de Nasc.', 'opcoes'=> array("RJ"=> "Rio de Janeiro", "SP"=>"São Paulo", "ES"=>"Espírito Santo", "MG"=>"Minas Gerais", "O"=> "Outros"), "valor_padrao"=> "MG"),
        'cpf'=>array('tipo'=> 'number', 'nome'=> 'cpf', 'label'=> 'CPF', 'placeholder'=> 'Informe seu CPF.', 'funcao_validacao'=> 'validaCpf'),
        'descricao'=>array('tipo'=> 'textarea', 'nome'=> 'descricao', 'label'=> 'Descrição', 'placeholder'=> 'Faça uma descrição sobre você.', 'obrigatorio'=>false),
        
        'botao_enviar'=>array('tipo'=> 'submit', 'nome'=> 'enviar', 'label'=> 'Enviar'),
        'botao_limpar_form'=>array('tipo'=> 'reset', 'nome'=> 'reset', 'label'=> 'Limpar Formulário'),
    )
);
//função pra criar formulário
function criarFormulario($formulario){
    echo "<form action='" . $formulario["url_submit"] . "method='" . $formulario["tipo_submit"] . "id='" . $formulario["id"] . "'>";
    foreach($formulario["itens"] as $chave => $valor){
        criaCampo($chave, $valor);
    }
    echo "</form>";
};
//função pra criar campo

function criaTextoNumero($chave, $valor){
    echo "<div class='itemWrapper'>" . "<label for='". $valor['id'] . "'>" . $valor['label'] . "</label>" . "<input type='" . $valor['tipo'] . "id='" . $chave . "placeholder='" . $valor['placeholder'] . "'>" . "</input>" . "</div>";
}
function criaTextarea($chave, $valor){
    echo "<div class='itemWrapper'>" . "<label for='" . $valor['id'] . "'>" . $valor['label'] . "</label>" . "<textarea id='" . $chave . "placeholder='" . $valor['placeholder'] . "'>" . "</textarea>" . "</div>";
}
function criaResetSubmitButton($chave, $valor){
    echo "<div class='itemWrapperBTNsSubmitReset'>" . "<button type='" . $valor['tipo'] . "id='" . $chave . "name='" . $valor['nome'] . "'>" . $valor['label'] . "</button>" . "</div>";
}
function criaSelect($chave, $valor){
    echo "<div class='itemWrapper'>" . "<label for='" . $valor['id'] . "'>" . $valor['label'] . "</label>" . "<select id='" . $chave . "name='" . $valor['nome'] . "required>";
    foreach($valor['itens'] as $chavinha => $valorzin){
        echo "<option value='" . $chavinha . ">" . $valorzin . "</option>";
    }
    echo "</select>" . "</div>";
}
/*function criaCheckboxRadio($chave, $valor){
    echo "<div class='itemWrapper'>" . "<label>" . $chave . "</label>" . "<input type='" . $valor['tipo'] . "id='" . $chave . 
}*/


function criaCampo($chave, $valor){
    if($valor['tipo'] == 'number' || $valor['tipo'] == 'text'){
        criaTextoNumero($chave, $valor);
    }
    if($valor['tipo'] == 'textarea'){
        criaTextarea($chave, $valor);
    }
    if($valor['tipo'] == 'reset' || $valor['tipo'] == 'submit' || $valor['tipo'] == 'button'){
        criaResetSubmitButton($chave, $valor); 
    }
    if($valor['tipo'] == 'select'){
        criaSelect($chave, $valor);
    }
    /*if($valor['tipo'] == 'checkbox' || $valor['tipo'] == 'radio'){
        criaCheckboxRadio($chave, $valor);
    }*/
}
?>