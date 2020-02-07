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
    $a = $_POST['text'];
    $b = $_POST['mail'];
    $res = "-------". "\n". $a. "\n". "-------". "\n". $b. "\n";
    file_put_contents('forma.csv', "$res" . "\n", FILE_APPEND);
    ?>
</body>
</html>