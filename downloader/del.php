<?php
unlink('file/'. $_GET['file']);
header("Location: file2.php"); 
?>