<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>02 Exercicio</title>
</head>
<body>
<div>    
    <?php
    $atual = $_GET["aa"];
    echo "O ano atual é ". $atual--;            // COMENTARIO ALTERNATIVO 01
    echo "<br>O ano passado foi ". $atual++;    #  COMENTARIO ALTERNATIVO 02
    echo "<br>O ano que vem será ". ++$atual;   /* COMENTARIO ALTERNATIVO 03 */
    ?>
<!--    Pré-incremento ++$a
        Pós-incremento $a++
        Pré-decremento --$a
        Pós-decremento $a--      -->

</div>
</body>
</html>