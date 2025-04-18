<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $pessoas = [
        ['id' => 1 , 'nome' => 'jantony'],
        ['id' => 2 , 'nome' => 'lucas'],
        ['id' => 3 , 'nome' => 'cauan'],
        ['id' => 4 , 'nome' => 'rcosme']
    ];

    // contagem, quantidade de giros, parar


    //LAÇO FOR
    echo "<hr> laço for <hr>";
    for($i = 0;$i < count($pessoas);$i++){
        echo "o cliente; ". $pessoas[$i]['nome']. " possui o ID: ". $pessoas[$i]['id']."<br>";
    };
    // While
    echo "<hr> laço while <hr>";
    $i = 0;
    while($i < count($pessoas)){
    echo "o cliente; ". $pessoas[$i]['nome']. " possui o ID: ". $pessoas[$i]['id']."<br>";
    $i++;
    };

    // laço foreach
    echo "<hr> laço foreach <hr>";
    foreach($pessoas as $chave => $valor)
    {
        echo "o cliente; ". $valor['nome']. " possui o ID: ". $valor['id']."<br>";
    }

    ?>
</body>
</html>