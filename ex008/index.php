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

    <h1>Descobrir se é impa ou par</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <label for="v1">Valor</label>
    <input type="number" name="v1" id="v1" value="<?=$valor1?>">
    <input type="submit" value="enviar">
</form>

<?php 
$resultado = $valor % 2;

if($resultado == 1) {

    echo "<p> Esse Numero é impar </p>";
    
} else{echo "<p> Esse Numero é par </p>";
};


?>

</body>
</html>