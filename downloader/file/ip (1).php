<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
Введите адрес страницы или сайта
<br>
    <form action='ip.php' metod='post'>
<input type="text" name="n"></inhut><br>
        <input type="submit" name="result"><br>
    </form>
</body>
</html>
<?php
$str=file_get_contents($_POST['n']);
preg_match("/<body>(.*)<\/body>/ius",$str,$arr);
$str=$arr[1];
$pat='/<.*?>/';
$rep="$1";
$str2=preg_replace($pat,$rep,$str);
echo htmlentities($str2);
?>