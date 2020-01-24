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
    // обработка без секции
    $iniArray = parse_ini_file("file.ini");
    print_r($iniArray);

    //обработка с секциями
    $iniArray = parse_ini_file("file.ini", true);
    print_r($iniArray); 
    ?>
</body>
</html>