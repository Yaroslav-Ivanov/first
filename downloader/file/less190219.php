<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
Введите текст
<br>
    <form action='ip.php' metod='post'>
        <textarea rows="25" cols="100" name="n"><?php echo (isset($_POST['n'])) ? $_POST['n'] : 'Введите текст';?></textarea>
        <input type="submit" name="result"><br>
    </form>
</body>
</html>