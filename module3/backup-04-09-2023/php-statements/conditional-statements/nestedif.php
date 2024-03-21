<?php 
/*
nested if : if within another if i.e called nested if 
syntax :
if(condition)
{
    if(condition)
    {
        statements;
    }
}

*/

$a=40;
$b=20;
if($a>$b)
{
    if($a!=0 && $b!=0)
    {
      echo "a and b both are positive numbers and a is greater b";
    }
}
else 
{
    echo "a is smaller than b";
}
?>