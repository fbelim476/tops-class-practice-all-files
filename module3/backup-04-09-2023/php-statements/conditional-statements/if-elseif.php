<?php 
/*

if elseif : if is executed when condition is always true elseif check true condition multiple time if elseif is false else is executed.

syntax :

if(condition)
{
    statements;
}
elseif(condition)
{
    statements
}

elseif(condition)
{
    statements
}

elseif(condition)
{
    statements
}
else 
{
    statements;
}

*/

$a=50;
$b=50;
if($a>$b)
{
    echo "a is greater than b";
}
elseif($b>$a)
{
    echo "b is greater than a";
}
else 
{
    echo "a and b both are same";
}
?>