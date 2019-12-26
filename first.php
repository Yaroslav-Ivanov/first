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
    $a=3;
    echo "\$a=$a";
    ?>
    <?php
    $arr = array("foo" => "bar", 12 => true);
    echo $arr["foo"];
    echo $arr[12];

    echo "<br>";
    $arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));

    echo $arr["somearray"] [6];
    echo $arr["somearray"] [13];
    echo $arr["somearray"] ["a"];

    echo "<br>";
    echo"<pre>";
   print_r($arr = array("some" => array(5 => 12, 23, 45, 69, "b" => 41))) ;
    echo $arr["some"] [5];
    echo $arr["some"] ["a"];
    "</pre>"
    ?>


    <?php
    $arr = array(5 => 1, 12 => 2);

    $arr[] = 56;
    print_r($arr);
    $arr["x"] = 42;
    print_r($arr);
    
    unset($arr[5]);
    unset($arr);
    echo "<br>";
    class foo 
    {
        function do_foo()
        {
            echo "Doing foo.";
        }
    }
    $bar = new foo;
    $bar ->do_foo();
    ?>

<!-- if -->
    <?php
    
    if ($a > $b) {
        echo "a больше, чем b";
        $b = $a;
    }

    echo "<br>";
    // else
    if ($a > $b) {
        echo "a is greater than b";
    } else {
        echo "a is NOT greater than b";
    }


    echo "<br>";
    // Альтернативный синтаксис 
    if ($a == 5):
        echo "a equals 5";
        echo "...";
    elseif ($a == 6):
        echo "a equals 6";
        echo "!!!";
    else:
        echo "a is neither 5 nor 6";
    endif;

    ?>
</body>
</html>