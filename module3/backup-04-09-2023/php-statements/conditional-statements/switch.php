<?php 
/* switch :  switch case is just like if elseif here we check multiple true case while case is true if case is false default is executed.

syntax 
switch(condition)
{
    case 'A': 
        statements;
        break;
    case 'B': 
        statements;
        break;
    case 'C': 
        statements;
        break;
    case 'D': 
        statements;
        break;
    default : 
    statements;
    break;    
}
*/

$grade='B';
echo "Input grade only in A,B,C"."<br>";
switch($grade)
{
    case 'A':
        echo "I am a Topper students &#9786";
        break;
        
    case 'B':
        echo "I am a Average  students &#9786";
        break;
        
    case 'C':
        echo "I am a Failed students &#9785";
        break;

    default: 
    echo "Sorry no grade found with input values try to contact with admin";
    break;

        
}
    ?>