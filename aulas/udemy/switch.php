<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $opcao = 3;
        switch ($opcao) {
            case 1:
                echo "Case 1";
                break;
            case 2:
                echo "Case 2";
                break;
            case 3:
                echo "Case $opcao";
                break;
            default:
                echo "Default";
                break;
        }
    ?>
</body>
</html>