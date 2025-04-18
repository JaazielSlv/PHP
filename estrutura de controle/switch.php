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

    switch($operação){
        case '+':
            echo "Soma: ". $nun1+$nun2;
            break;
        case '-':
            echo "Subtração: ". $nun1-$nun2;
            break;
        case '*':
            echo "Multiplicação: ". $nun1*$nun2;
            break;
        case '/':
            echo "Divisão: ". $nun1/$nun2;
            break;
        default:
            echo "operação invalida";
    };




    ?>
</body>
</html>