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
     function numb($n){
        if ($n == 0){
            $f = 1;
        } else {
            $f = numb($n - 1) * $n;
        }
        return $f;
    }
    echo numb(0);
    echo "<br>";
    echo numb(5);
    ?>
</body>
</html>