<?php 
// mktime(date("h"),date("i"),date("s"),date("m"),date("d"),date("y"));

//$today=mktime(0,0,0,date("m")+2,date("d")+34,date("y")+1);
//echo "Today the date is :".date("d/m/Y",$today)."<br>";
// echo "After 4 days  the date is :".date("d/m/Y",$today)."<br>";
// echo "before 4 days  the date is :".date("d/m/Y",$today)."<br>";
//echo "after 34 days 2 month and 1 years  the date is :".date("d/m/Y",$today)."<br>";

date_default_timezone_set("Asia/Calcutta");
$time=mktime(date("h"),date("i"),date("s"),date("m"),date("d"),date("y"));
echo "Today the date and time is :".date("d/m/y H:i:s a",$time);


?>