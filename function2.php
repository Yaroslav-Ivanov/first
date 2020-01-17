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
    $array = array(144444, 2, 3232, 4456, 5355);

    function takes_array($array)
    {
        $max = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] > $max) {
                $max = $array[$i];
            }
        }
        return $max;
    }
    echo takes_array($array)

    ?>
</body>

</html>