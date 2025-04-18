<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $nun1 = 10;
    $nun2 = 5;

    $operação = "-";

    $retorno = match($operação){
        '+' => "soma: " . $nun1+$nun1,
        '-' => "subtração: " . $nun1+$nun1,
        '*' => "multiplicação: " . $nun1+$nun1,
        '/' => "divisão: " . $nun1+$nun1,
        default => 'Operação Invalida', 
    };
    echo $retorno


    ?>
</body>
</html>
</body>
</html>