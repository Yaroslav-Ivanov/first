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
    $money = 2000;
    $proc = 11.5;
    $stav = 1; 

    for (; $stav <= 14; $stav++) {
        $money = $money + ($money * (($proc / 12) / 100 ));
    }
    echo  $money;
?>
</body>
</html>