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
    // $makefoo = true;
    // bar ();
    // if ($makefoo) {
    //     function foo ()
    //     {
    //         echo "I don't exist program execution reaches me. \n";
    //     }
    // }

    // if ($makefoo) foo();
    //  function bar()
    //  {
    //      echo "I exiat immediately upon program start.\n";
    //  }


    //Вложенные функции
    // function foo ()
    // {
    //     function bar()
    //     {
    //         echo "I don't exist until foo() is called.\n";
    //     }
    // }
    // foo();
    // bar();

    //Передача массива в функцию
    // $input = array(5, 1);
    // function takes_array($input)
    // {
    //     echo '$input[0] + $input[1] =',
    //     $input[0]+$input[1];
    // }
    // takes_array($input);

    // $input = array(5, 1);
    // function takes_array($input)
    // {
    //     echo '$input[0] + $input[1] =',
    //     ($input[0]+$input[1]) * 2;
    // }
    // takes_array($input);


        //Массив умноженный на 2
    // function takes_array($input)
    // {
    //     echo '$input[0] + $input[1] =',
    //     $input[0]+$input[1];
    // }
    // takes_array(array(5, 7));

    // function mul($arr)
    // {
    //     for ($i = 0; $i < count($arr); $i++){
    //         $arr[$i] = $arr[$i] * 2;
    //     }
    //     return $arr;
    // }
    // print_r(mul ([1, 2, 3]));


        $a = 5845645646545646597;
        $b = 854434242423554;
        $g = 44535553435;
        $f = 54355844545456644456456;
        
        function numb($a, $b, $g, $f){
            if ($a > $b) {
            $c = $a;
            }
            else {
                $c = $b;
            }
            if ($c < $g){
                $c = $g;
            }
            if($f > $g){
                $c = $f; 
            }
           
            return $c;
        }

        echo numb($a,$b,$g,$f);
    ?>
</body>

</html>