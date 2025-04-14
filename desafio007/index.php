<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    $valor = $_GET['v1'] ?? 0;
    ?>
    
    <main>
        <h1>Informe seu salario</h1>                         
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Salario em (R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$valor?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="Resultado final">
    <h2>Resultado final</h2>
    <?php 
    $resultado = (int)($valor / 1500);
    $resto = $valor % 1500;
    echo "<div>Quem recebe um salario de R$$valor ganha <strong>$resultado salarios minimos</strong> + $resto</div>";
    ?>

    </section>
</body>
</html>
