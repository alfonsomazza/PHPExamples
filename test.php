<?php

function addFive($num) {
    
    $num +=5;
}

function addSix(&$num) {
    
    $num +=6;
}
$orignum = 10;
addFive($orignum);
echo "original value is $orignum \n";
addSix($orignum);
echo "original value is $orignum \n";
?>



