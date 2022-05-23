<?php
$i=10;
if($i==0){
    echo"i equals to 0";
}
else if($i==1){
    echo"i equal to 1 ";
}
else if ($i==2){
    echo"i equal to 2";
}
switch($i){
    case 0:
        echo"i equal to 0";
        break;
    case 1:
            echo"i equals to 1";
            break;
            case 2;
            echo"i equals to 2";
            break;
            default:
            echo"Nothing ";
}
?>