<?php
$mediaFinal= function($nota1, $nota2, $nota3, $nota4){
    echo "N1 = ". $nota1 . " | " . "N2 = " . $nota2 . " | " . "N3 = " . $nota3 . " | " . "N4 = " . $nota4;
    $resultado = ($nota1 + $nota2 + $nota3 + $nota4)/4;
    if ($resultado>=5){
        echo "Aprovado";
    }else{
        echo "Reprovado";
    }
}
?>
<?php
    if(!empty($_GET["nota1"])||(!empty($_GET["nota2"]))||(!empty($_GET["nota3"]))||(!empty($_GET["nota4"]))){
       echo $mediaFinal($_GET["nota1"],$_GET["nota2"],$_GET["nota3"],$_GET["nota4"]);
    }
?>