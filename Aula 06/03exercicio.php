<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>03 Exercicio</title>
</head>
<body>
<div>    
    <?php
    echo "Parte 1<br>";
    $a = 3;
    $b = $a;
    $b += 5;
    echo "a vale: $a<br>";
    echo "b vale: $b<br>";
    echo "Parte 2 <br>";
    $a = 3;
    $b = &$a; /* "$b" vira referencia de "$a" */
    $b += 5;
    echo "a vale: $a<br>";
    echo "b vale: $b<br>";
    ?>
</div>
</body>
</html>