<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fileedit.php" method="POST">
    <textarea name="name"  cols="30" rows="10" ><?= htmlspecialchars(file_get_contents('file//'.  $_GET['file'])) ?></textarea>
    <input type="hidden" name="oldname" value="<?=$_GET['file']?>"><br>
    <input type="submit" value="Save">
    </form>
    <form action="back.php ">
        <input type="submit" value="Back">
    </form>
</body>
</html>