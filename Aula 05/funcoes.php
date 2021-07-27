<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Funcoes</title>
    <style>
        h2 {
            font: 20pt Arial;
            color: #171559;
        }
    </style>
</head>
<body>
<div>    
    <?php
    /* Funcoes adicionais:
    abs() = valor absoluto
    pow() = potenciacao
    sqrt() = raiz quadrada
    round() = arredondamento cell() arredonda pra cima e floor() arredonda pra baixo
    intval() = Valor inteiro da variavel
    number_format() = formatacao de numero com alguns parametros exemplo: number_format($v1, 2, ",", ".") variavel, casas decimais, separador decimal, separador do milhar
    */
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2> Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 e: ". abs($v2);
    echo "<br>O valor de $v1<sup>$v2</sup> é: ". pow($v2,$v1);
    echo "<br>A raiz de $v1 é: ". sqrt($v1);
    echo "<br>O valor arredondade de $v2 é: ". round($v2);
    echo "<br>A parte inteira de $v1 é: ", intval($v1);
    echo "<br>O valor de $v1 em moeda e R$ " . number_format($v1,2,",",".")
    ?>

</div>
</body>
</html>