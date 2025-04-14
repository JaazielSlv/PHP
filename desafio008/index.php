<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 8</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    $valor = $_GET['v1'] ?? 0;
    ?>
    
    <main>
        <h1>Informe um numero</h1>                         
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Numero)</label>
            <input type="number" name="v1" id="v1" value="<?=$valor?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="Resultado final">
    <h2>Resultado final</h2>
    <?php 
    $raiz_quadrada = $valor ** (1/2);
    $raiz_cubica = $valor ** (1/3);
    echo "Analisandoo numero $valor temos: <li>Sua Raiz quadrada é $raiz_quadrada </li><li>
    Sua Raiz cubica é $raiz_cubica</li>";
    ?>

    </section>
</body>
</html>
