<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula do dia 26/11/2024</title>
</head>
<body>
    <h3>spread operator</h3>
    <?PHP
    $numero1 = 25;
    $numero2 = 20;
    function somar2(int ...$numeros){
        //return array_sum($numeros); //SOLUÇÃO SIMPLES

        //solução menos inteligente
        $total = 0.0;
        foreach($numeros as $n)
            $total += $n;
        return $total;
    }

    echo "<br>";var_dump(somar2($numero1, $numero2, 38, 47, 26));
    ?>
</body>
</html>