<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If e Else</title>
</head>
<body>
    <?php
    $numero1 = 5;
    $numero2 = 2;
    $nome1 = 'Robson';
    $nome2 = 'Pedro';
    $numero3 = 12;
    $numero4 = 11;

    //Verifica se $numero1 é maior que $numero2.
    if ($numero1 > $numero2){
        echo "5 é maior que 2! <br>";
    }else{
        echo "5 não é maior que 2! <br>";
    }
    //Verifica se $nome1 é diferente de $nome2.
    if ($nome1 != $nome2){
        echo "Robson é diferente de Pedro! <br>";
    }else{
        echo "Robson não é diferente de Pedro! <br>";
    }
    //Verifica se $numero3 é menor ou igual a $numero4.
    if ($numero3 <= $numero4){
        echo "12 é menor ou igual a 11! <br>";
    }else{
        echo "12 não é menor ou igual a 11! <br>";
    }
    ?>
</body>
</html>
