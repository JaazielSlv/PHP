<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 002</h1>
        <h2>Gerador de números aleatórios entre 0 e 100...</h2>
    </header>
    <?php 
        $min = 0;
        $max = 100;
        $randomNumber = rand($min, $max);
    ?>
        <section>
        <p>O Valor gerado foi de: <strong><?php echo $randomNumber; ?></strong></p>
        <button onclick="window.location.reload();">Gerar outro número</button>
        </section>
</body>
</html>