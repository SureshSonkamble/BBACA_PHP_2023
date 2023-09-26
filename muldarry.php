<?php
$md=array(
array(1,2,3),
array(4,5,6),
array(7,8,9)
);

#echo $md[2][1];
#print_r($md);
for($r=0;$r<3;$r++) //0 //1 //2
{
    for($c=0;$c<3;$c++)//0 1 2
    {
       echo $md[$r][$c]."<br>";// md[0][0]
       if($md[$r][$c]==5){ 
        //echo "fond";
       // break;
       //  exit();
       continue;
       }
    }  
}

?>