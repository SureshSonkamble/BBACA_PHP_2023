<?php  
function adder(&$str2)  
{  
    $str2 .= "Call By Reference";  
    
}  
$str = 'This is ';  
adder($str);  
echo $str;  
?>  