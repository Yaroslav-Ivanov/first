<?php
$arr = scandir("file");


for ($i = 2; $i < count($arr); $i++) {

    switch (explode(".", $arr[$i])[1]) {
        case 'docx';
            $icon = 'docx-file-14-504256.png';
            break;
        case 'pdf';
            $icon = 'adobe-pdf-icon.png';
            break;
        default:
            $icon = 'images.png';
            break;
    }
    $filesize = round(((filesize("file\\$arr[$i]")) / 1024) / 1024, 3) . "Mb";
    echo "<a href='file\\$arr[$i]'><img src='$icon' width='26' height='26'>$arr[$i]</a> 
    <a href='del.php?file=$arr[$i]'><img src='cross.png' width='32' height='32'></a>
    <a href='rename.php?file=$arr[$i]'><img src='pan.png' width='20'></a> $filesize <br>";
    }
