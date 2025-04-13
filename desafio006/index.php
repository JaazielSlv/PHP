<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 5</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET['v1'] ?? 0;
    $divisor = $_GET['v2'] ?? 0;
    ?>

    <main>
        <h1>Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Dividendo</label>
        <input type="number" name="v1" id="v1" value="<?=$dividendo?>" >
        <label for="v2">Dividendo</label>
        <input type="number" name="v2" id="v2" value="<?=$divisor?>" >
        <input type="submit" value="Dividir">
    </form>

    <section>
        <h2>Resultado</h2>
        <?php 
        $resultado = $dividendo / $divisor;
        $resto = $dividendo % $divisor;
        echo "<p>O dividendo é: $dividendo</p><p>O Divisor é: $divisor</p><p>O Resultado é: $resultado</p><p>O resto é: $resto</p>"
        ?>
    </section>
    </main>
</body>
</html>