<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Desafio 001</h1>
    </header>
    <section>
        <?php 
        $numero = $_REQUEST['numero'] ?? null;
        $antercessor = $numero - 1;
        $sucessor = $numero + 1;
        ?>
        <list>
            <p>O número informado foi: <?= htmlspecialchars($numero) ?></p>
            <p>O antecessor é <?= htmlspecialchars($antercessor) ?></p>
            <p>O sucessor é <?= htmlspecialchars($sucessor) ?></p>
    </section>
</body>
</html>