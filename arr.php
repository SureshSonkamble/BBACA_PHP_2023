<?php
$a=array(1,2,3,4,5,6,7,8,9,10);
$l=count($a);
//echo "Length=". $l;
$n=0;
for($i=0;$i<$l;$i++){
    //echo $a[$i]."<br>";
    if($a[$i]==2){
      //  echo "Found";
        $n++;
    }
}
echo "Number found ".$n. " time";

?>