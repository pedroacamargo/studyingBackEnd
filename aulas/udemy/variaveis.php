<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // string -> pode ser '' ou ""
        $nome = 'Pedro Augusto';

        // int
        $idade = 29;

        // float
        $peso = 82.5;

        // boolean
        $fumante_sn = true;


        $idade = '30';
    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p> <!-- Poderia escrever isso com a tag ?php echo $nome ? -->

    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p> <!-- True = 1 -->
</body>
</html>