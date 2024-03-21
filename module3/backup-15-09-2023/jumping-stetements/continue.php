<?php 
/* for : for loop is executed when condition is true
    for(initializations; condition; incremenet;decrement)
    {
        statements;
    }
*/
for($i=0;$i<=50;$i++)
{
    if($i==11 || $i==5)
    {
        continue;
    }
    elseif($i==20 || $i==30)
    {
        continue;
    }
    echo $i."<br>";
}

?>