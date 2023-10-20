<?php
$a = $_POST['str'];
$op = $_POST['op'];
echo $a."<br>";
echo $op."<br>";
$l= strlen($a);
echo $l."<br>";
$av=$ev=$iv=$ov=$uv=$cnt=0;

for($i=0;$i<$l;$i++)
{
    echo $a[$i]."<br>";


    if(( $a[$i] == 'a') || ($a[$i] == 'A'))
    $av++;
    else if(( $a[$i] == 'e') || ($a[$i] == 'E'))
    $ev++;
    else if(( $a[$i] == 'i') || ($a[$i] == 'I'))
    $iv++;
    else if(( $a[$i] == 'o') || ($a[$i] == 'O'))
    $ov++;
    else if(( $a[$i] == 'u') ||  ($a[$i]== 'U'))
    $uv++;
    else $cnt++;
}
    echo "<br> Total 'a' : $av";
    echo "<br> Total 'e' : $ev";
    echo "<br> Total 'i' : $iv";
    echo "<br> Total 'o' : $ov";
    echo "<br> Total 'u' : $uv";
    echo "<br> Total consenents are : $cnt";
    $tot = $av+$ev+$iv+$ov+$uv;
    echo $tot;


?>