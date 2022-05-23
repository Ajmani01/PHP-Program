<?php
$a=array("a"=>"red",'b'=>"green","c"=>"blue","d"=>"yellow");
$b=array("a"=>"purple","b"=>"orange");
array_splice($a,0,2,$b);
print_r($a);
?>