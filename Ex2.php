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
        $data_de_hoje = date ("d/m/Y" ,time());
    ?>
    <p aling="center">Hoje é dia <?php echo $data_de_hoje; ?></p>
</body>
</html>