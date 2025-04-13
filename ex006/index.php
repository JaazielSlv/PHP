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
    // CApturando os dados do formulario retro alimentado
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>
    <h1>Somar valores</h1>
    <main>                         
                                <!--caminho do arquivo/-->
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v1">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="Resultado">
    <h2>Resultado da soma</h2>
    <?php 
    $soma = $valor1 + $valor2;
    echo "<div>$soma</div>";
    ?>

    </section>
</body>
</html>