<?php
    if(!empty($_GET["nome"])&&(!empty($_GET["idade"]))&&(!empty($_GET["estado"]))&&(!empty($_GET["cidade"]))&&(!empty($_GET["sexo"]))){
        echo $_GET["nome"],$_GET["idade"],$_GET["estado"],$_GET["cidade"],$_GET["sexo"];
    }else{
        echo "Preencha todos os campos do formulário.";
    }
?>