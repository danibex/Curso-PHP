<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>01 Exercicio</title>
</head>
<body>
<div>    
    <?php
    $preco = $_GET["p"];
    echo "O preco do produto é R$ $preco";
    $preco *= 0.9;
    echo "<br>O produto com 10% de desconto é R$ ". number_format($preco, 2);
    ?>


</div>
</body>
</html>