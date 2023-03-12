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
        $usuario_possui_cartao_loja = true;
        $valor_compra = 225;

        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if ($usuario_possui_cartao_loja == true && $valor_compra >= 200) {
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        } 
    ?>

    <h1>Detalhes do pedido</h1>

    

</body>
</html>