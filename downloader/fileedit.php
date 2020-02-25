<?php 
file_put_contents('file/'.  $_POST['oldname'], $_POST['name']);
header("Location: file2.php"); 
?>