<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de numero Real</h1>
        <?php 
            $nun = $_POST["n"] ?? 0;

            echo "<p>Analisando o Numero <strong>". number_format($nun, 3, ",",".")."</strong> recebido</p>";
            $int = (int)$nun;
            $fra = $nun - $int;

            echo"<ul>
            <li>A parte interira é $int</li>
            <li>A parte fracionada é $fra</li>
            </ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>