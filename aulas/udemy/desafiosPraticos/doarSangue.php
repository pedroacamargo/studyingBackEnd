<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pode doar sangue?</title>
</head>
<body>
    <?php 
        $idade = 18;
        $peso = 76;

        if ($peso >= 50 && ($idade <= 69 && $idade >= 16)) {
            echo 'Atende aos requisitos';
        } else {
            echo 'Não atende aos requisitos';
        }
    ?>
</body>
</html>