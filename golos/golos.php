<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $a = $_POST['Да'];
    $b = $_POST['Нет'];
    $c = $_POST['Не знаю'];
     $a = file_get_contents("golos.csv") +1;
     file_put_contents("golos.csv", $a);
     $b = file_get_contents("golos.csv") +1;
     file_put_contents("golos.csv", $b);
     $c = file_get_contents("golos.csv") +1;
     file_put_contents("golos.csv", $c);
    
    ?>
</body>
</html>