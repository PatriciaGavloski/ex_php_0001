<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de PHP</title>
</head>
<body>

    <h1>PHP</h1>

    <?php
    $nome = "Patrica";
    ?>

    <?php echo "<p>O meu nome é $nome</p>";
    ?>
    
<h3>Exemplos</h3>

<?php 
date_default_timezone_set("America/Sao_Paulo"); //GMT -3

echo "Hoje é dia " . date("d/M/Y");
echo " e a hora atual é " . date("G:i:s");
?>

</body>
</html>