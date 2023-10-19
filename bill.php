<?php
$cname=$_GET['cnm'];
$cnum=$_GET['cno'];
$unt=$_GET['unit'];

echo "customer name:=".$cname."<br>";
echo "customer number:=".$cnum."<br>";
echo "Unit consumed:=".$unt."<br>";


if($unt<=50){
    $bil=($unt*3.50)+150;
    echo "Total bill:=".$bil;
}else
if($unt>50 && $unt<=100){
    $bil=($unt*4.0)+150;
    echo "Total bill:=".$bil;
}



?>