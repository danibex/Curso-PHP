<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>04 Exercicio</title>
</head>
<body>
<div>    
    <?php
    /* Criando variaveis a partir do conteudo de outras variaveis */
    $site = "cursoemvideo";
    $$site = "cursoPHP";
    echo "Variavel 1 = $site <br>";
    echo "Variavel 2 = $cursoemvideo <br>";
    /* Usou o nome da variavel criada (cursoemvideo) para criar outra variavel $cursoemvideo, e armazenar o valor "cursoPHP" na variável $cursoemvideo */
    $x = "abc";
    $$x = "def";
    echo "Variavel x = $x <br>";
    echo "Variavel SSx = $abc "; 
    ?>
</div>
</body>
</html>