<?php 
$price="4500";
echo "The price of One day stay is :".$price."<br>";
$today=mktime(0,0,0,date("m"),date("d"),date("y"));
echo "Checkin date is :".date('d/m/y',$today)."<br>";

// $tommarow=mktime(0,0,0,date("m"),date("d")+1,date("y"));
// echo "Chekout date is :".date('d/m/y',$tommarow)."<br>";


$t=mktime(0,0,0,date("m"),date("d")+3,date("y"));
echo "Checkout date is :".date('d/m/y',$t)."<br>";

// find the diffrence b/w date
$diff=($t-$today)/86400;
echo "The difference b/w date is :".$diff."<br>";
$tot=$diff*$price;
echo "<h2 style='color:green'>Subtotal of bill is : $tot </h2>";
?>