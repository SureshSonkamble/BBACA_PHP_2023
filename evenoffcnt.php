<?php
$a=array(1,2,3,4,5,6,7,8,9,10);
$l=count($a);
//echo "Length=". $l;
$ecnt=0;
$ocnt=0;
for($i=0;$i<$l;$i++){
   if($a[$i]%2==0){ 
    $ecnt++;
   }else{
    $ocnt++;
   } 
}
echo "Even Cound ".$ecnt. " time"."<br>";
echo "Odd Cound ".$ocnt. " time"."<br>";

?>