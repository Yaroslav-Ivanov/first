<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Передача аргументов по ссылке -->
    <?php
    function plus(&$string){
        $string .= ' + Петя';
    }
    $str = 'Ира';
    plus($str);
    echo $str;
    echo "<br>";
    ?>

        <!-- Исползование значиний по умолчанию в определении функции -->
    <?php
    function makecoffee($type = "cappuccino"){
        return "Making a cup of $type. \n";
    }
    echo makecoffee();
    echo "<br>";
    echo makecoffee("espresso");
    echo "<br>";
    ?>

        <!-- Област видимости переменной -->
    <?php
    $a = 1;
    function Test(){
        echo $a;
    }
    Test();
    ?>

        <!-- Область видимости переменной -->
    <?php
    $a = 1;
    $b = 2;
    function Sum(){
        global $a, $b;
        $b = $a + $b;
    }
    Sum();
    echo $b;
    echo "<br>";
    ?>

       <!-- Статические переменные -->
<?php
    function Test2(){
        static $a = 0;
        echo $a;
        $a++;
    }

    Test2 (5);
    echo $a;
    ?>
</body>
</html>