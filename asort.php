<?php
$arr=array(10,20,30,2,5,3);

asort($arr);
$len=count($arr);
for($i=0;$i<$len;$i++){
    echo$arr[$i];
    echo"<br>";
}



?>