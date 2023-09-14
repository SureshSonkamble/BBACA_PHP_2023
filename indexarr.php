<?php
$ar=array(1,2,3,4,2,2,8,4);
$n= count($ar);
//echo $ar[3];
//echo "Length is ".$n;
$cnt=0;
$s=9;
for($i=0;$i<$n;$i++){
    if($s==$ar[$i]){
        $cnt++;
    }
    //echo $ar[$i]."<br>";
}
echo "Count ".$cnt;
?>