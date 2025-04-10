<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Resultado</h1></header>
    <section>
        <?php 
        $valor = $_REQUEST['valor'] ?? 0;
        $dolar = 5.63;
        $Resultado = $valor * $dolar;
        echo ("<p>Seus $valor equivalem a US\$ $Resultado</p>");
        echo ("cotação fixa de $dolar");
        ?>
    </section>
</body>
</html>