<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Operadores</title>
</head>
<body>
<div>    
    <?php
    /* Inserir paratros na url: http://localhost/Curso%20php/Aula%2005/Operadores.php?a=3&b=2 */
        /*$n1= 3;
        $n2= 2;*/
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1 + $n2) / 2;  
    echo "A soma vale ". ($n1+$n2);
    echo "<br/> A subtração vale ". ($n1-$n2);
    echo "<br/> A multiplicação vale ". ($n1*$n2);
    echo "<br/> A divisão vale ". ($n1/$n2);
    echo "<br/> O modulo vale ". ($n1%$n2);
    echo "<br>A média é $m";
    /* Ordem de precedencia matematica: (), * / % , + - */
    /* Concatenação com o ponto */
    /* echo "A soma vale ". ($n1+$n2); */
    ?>
<!--    Soma            $s = $n1 + $n2;  
        Subtração       $s = $n1 - $n2;
        Multiplicação   $s = $n1 * $n2;
        Divisão         $s = $n1 / $n2;
        Modulo          $s = $n1 % $n2;              
-->

</div>
</body>
</html>