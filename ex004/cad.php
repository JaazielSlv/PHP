<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_REQUEST); //Essa Request é universal gat e post
            $nome_recebido = $_GET["nome"] ?? "Sem nome"; //Se não receber nada, retorna "Sem nome"
            $sobrenomerecebido = $_REQUEST["Sobrenome"] ?? "Sem sobrenome"; //Se não receber nada, retorna "Sem sobrenome"
            echo "<p>É um prazer te conhecer, <strong>$nome_recebido $sobrenomerecebido</strong> este é meu site </p>";


        ?>
        <a href="javaScript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>