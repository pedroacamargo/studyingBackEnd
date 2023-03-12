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

        $nome = "Jorge";
        $cor = "roxo";
        $idade = 25;

        // operador
        echo 'Olá ' . $nome . ', vi que sua cor preferida é '. $cor . ', estou vendo também que voce possui '. $idade . ' anos e que gosta de jogar videogame';

        echo "<br>";
        
        // aspas duplas -> podemos fazer que nem o `${}` do JS
        echo "Olá $nome";

    ?>

</body>
</html>