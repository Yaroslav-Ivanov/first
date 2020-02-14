<?php
$today = getdate();
echo $today['month'];
echo '<br>';
echo $today['weekday'];
echo '<br>';
?>

<?php
$week = ['Monday' => 'Понедельник',
         'Tuesday' => 'Вторник',
         'Wednesday' => 'Среда',
         'Thursday' => 'Четверг',
         'Friday' => 'Пятница',
         'Saturday' => 'Суббота',
         'Sunday' => 'Воскресенье'];

$dat =getdate();
echo $week [$dat['weekday']];
echo '<br>';
?>

<?php 
echo $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
echo '<br>';
echo $today = date("m.d.y");                         // 03.10.01
echo '<br>';
echo $today = date("j, n, Y");                       // 10, 3, 2001
echo '<br>';
echo $today = date("Ymd");                           // 20010310
echo '<br>';
echo $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo '<br>';
echo $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
echo '<br>';
echo $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
echo '<br>';
echo $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
echo '<br>';
echo $today = date("H:i:s");                         // 17:16:18

?>

<?php
echo '<br>';
echo date("M-d-Y",mktime(21,00,00,02,14,2020));
?>