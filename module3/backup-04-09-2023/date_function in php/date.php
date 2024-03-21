<?php 
// date function 

// echo "Today the date is :".date("d/m/y");
//echo "Today the date is :".date("d/m/Y");

// formate of date functions
// echo "Today the date is :".date("d/m/y")."<br>";
// echo "Today the date is :".date("d.m.y")."<br>";
// echo "Today the date is :".date("d-m-y")."<br>";


// parameters in date function 

// print today date & day

// echo "Today is :".date("d");
//echo "Today is :".date("l");
//echo "Today is :".date("D");

// //print month in date
// echo "Today a month is :".date("m")."<br>";
// echo "Today a month is :".date("F")."<br>";
// echo "Today a month is :".date("M")."<br>";

// print a year in date
// echo "Years  is  :".date("y")."<br>";
// echo "Years is :".date("Y")."<br>";

// echo "Today the data is :".date("d/F/Y");
// echo "Today the data is :".date("d/m/Y");


// print a time of systems

// unix time stamp
// set a timezone to print country default time
 date_default_timezone_set("Asia/Calcutta"); 
//date_default_timezone_set("Asia/Dhaka"); 
echo "The time is it :".date("H:i:s a")."<br>"; //24 hours
echo "The time is it :".date("h:i:s a")."<br>"; //12 hours



?>