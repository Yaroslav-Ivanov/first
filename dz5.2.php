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
    $f = fopen("count.dat", "r");
    $count = fgets($f);
    $count = $count + 1;
    echo $count;
    fclose($f);
    $c = fopen("count.dat","w+");
    fwrite($c,$count);
    ?>
</body>

</html>