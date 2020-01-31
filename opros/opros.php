<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="opros2.php" method="post">
    <?php
    $arr = file('opros.csv');
    ?>

  <h3><?=$arr[0]?></h3>

    <?php
    for ($i=1; $i < count($arr); $i++) { 
        $opr = explode(" - ", $arr[$i])[0];
        echo "<label><input type='radio' name='op' value='$i'>$opr</label><br>";
    }
    
    ?>
    <input type="submit" value="Ok">
    </form>
</body>
</html>