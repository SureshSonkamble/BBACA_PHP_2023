<?php
$data=array("Z"=>"aaaa","B"=>"zzz","A"=>"bbb");
//echo $data["A"];
//asort($data);
//ksort($data);
//arsort($data);
krsort($data);
foreach($data as $k=>$v){
    echo $k."=>".$v."<br>";
}

?>