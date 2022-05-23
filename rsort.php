<?php
$arr=array(10,20,30,15,32);

rsort($arr);
$len=count($arr);
for($i=0;$i<$len;$i++){
    echo$arr[$i];
    echo"<br>";
}



?>