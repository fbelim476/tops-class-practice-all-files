<?php
function nm(&$fname)  //&$fname reference variable i.e used to call a function by reference
{

    echo "My firstname is :Brijesh"."<br>";
} 
$lname="My last name is : Pandey";
nm($fname);
echo $lname;
?>