<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Aula 04</title>
</head>
<body>
<div>    
    <?php
        $n = 23;
        $no = (string)"Daniel"; 
        /* strint ou inte (conceitos de variavel) podem ser definidas para variaveis antes delas */
        echo $no. "<br>"; 
        /* Concatenação abaixo (texto + variavel + texto) */
        echo $no. " tem ". $n. " anos <br>";    
        /* Concatenação alternativa abaxo */
        echo "$no tem $n anos!<br>" 
        /* Aspas simples considera tudo dentro dela como texto (inclusive variaveis) */
    ?>
</div>
</body>
</html>