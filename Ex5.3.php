<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Php</title>
</head>
<body>
    
    <?php
    /*
    Algumas sequências de controle que podem ser usadas quando utilizamos aspas duplas
    
    - \" - insere no texto o caractere aspas duplas
    - \n - nova linha
    - \r - retorno do carro
    - \t - tabulação
    - \$ - insere no texto o simbolo $
    - \\ - insere no texto o caractere \ 
    - \xnn - caractere ASCII hexadecimal
    */
        $palavra = "teste";
        $frase = "Isto é um $palavra";
        echo $frase;
    ?>
</body>
</html