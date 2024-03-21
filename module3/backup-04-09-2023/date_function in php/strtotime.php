<?php 
// strtotime : convert any string into date formate

echo "Tommarow the date is :".date("d/m/y",strtotime("+1day"))."<br>";
echo "after 2 month  the date is :".date("d/m/y",strtotime("+2month"))."<br>";
echo "after 2 years the date is :".date("d/m/Y",strtotime("+2year"))."<br>";
echo "15 days before  the date is :".date("d/m/y",strtotime("-15day"))."<br>";


?>