<?php
$a=$_POST['n1'];
$b=$_POST['n2'];
$op=$_POST['op'];
echo "User Lelection:=".$op."<br>";
if($op=='a'){
$ans=$a+$b;
echo "Addition is:",$ans;
}

if($op=='s'){
    $ans=$a-$b;
    echo "Sub is:",$ans;
}
if($op=='m'){
    $ans=$a*$b;
    echo "MUl is:",$ans;
 }

 if($op=='d'){
    $ans=$a/$b;
    echo "Div is:",$ans;
}

?>