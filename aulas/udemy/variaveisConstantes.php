<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- usar constantes com uppercase -->

    <?php 

        // o define criará um variável constante
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_bd_dev');
        define('BD_SENHA', 'senha_bd_dev');

        echo BD_URL . '<br>';
        echo BD_USUARIO . '<br>';
        echo BD_SENHA . '<br>';
    ?>
</body>
</html>