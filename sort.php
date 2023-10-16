<?php
$a=array(1,7,3,8,5,6,7,8,9,0);
print_r($a);
echo "<br>";
$l=count($a);
 #sort($a);
 #rsort($a);
 for($j=0;$j<$l;$j++){ //1
    for($i=0;$i<$l-1;$i++){ //-----
        if($a[$i]<$a[$i+1]){ //1 >7 >3
            $temp=$a[$i+1];  //t=3
            $a[$i+1]=$a[$i]; //7
            $a[$i]=$temp;    //3
        }
    }
 }
 print_r($a);
?>
