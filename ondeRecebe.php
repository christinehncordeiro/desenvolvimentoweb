<?php
    if(!empty($_GET["numero"])){
        if(($_GET["numero"])%2==0){
            echo "é par";
        }else{
            echo "é ímpar";
        }
    }
?>
<?php
    if( (!empty($_GET["idade"])) && (!empty($_GET["nac"])) ){
        if(($_GET["idade"]>=18 && $_GET["idade"]<=70)&&($_GET["nac"]=="brasileira")){
            echo "está apto a votar";
        }
    }
?>