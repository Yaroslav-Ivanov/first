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
    $ind = $_POST['op'];
    $arr = file('opros.csv');
    $opr = explode(" - ",$arr[$ind]);
    $opr[1]+=1;
    $arr[$ind] = implode(" - ", $opr)."\n";

    file_put_contents('opros.csv', $arr);
    


    foreach($arr as $value){
        echo "$value<br>";
    }



    $s = 0;
    for ($i=1; $i <count($arr); $i++) { 
        $s = $s + explode(" - ", $arr[$i])[1];
    }
    echo $s;


    for ($i=1; $i <count($arr); $i++) { 
        $buf = explode(" - ", $arr[$i]);
        echo $buff[0] . " - " ($buf[1] / $sum * 100). "<br>";
    }
    ?>
</body>
</html>