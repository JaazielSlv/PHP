<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$valor = $_GET['v1'] ?? 0;
?>

    <h1>Desconto de 15% a cima de 100 e 5% abaixo de 100</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <label for="v1">Valor 1</label>
    <input type="number" name="v1" id="v1" value="<?=$valor1?>">
    <input type="submit" value="enviar">
</form>

<?php 


if($valor > 100) {
    $pagar = $valor - $valor * 0.15;
    echo "<p> Desconto de 15% </p>";
    
} elseif($valor <= 100 and $valor > 0) {
    $pagar = ($valor - $valor * 0.05);
    echo "<p> Desconto de 5% </p>";
} else{
    $pagar = "Valor invalido";
};

echo "<p>$pagar</p>";
?>

</body>
</html>