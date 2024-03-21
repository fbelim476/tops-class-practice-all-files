<?php 
/* foreach: foreach is used to convert any array as values 
Note : print array values in php we used print_r() function
array : array is used to stored multiple information in single variables 

syntax :

foreach(array as value)
{
    statements;
}

*/
$name=array("hardik","faijal","nakum","parth","yash","sneha");
//echo $name;
//print_r($name);
foreach($name as $value)
{
    echo "Name is :".$value."<br>";
}
?>
