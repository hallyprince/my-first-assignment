<?php
// first task
function Myrange($start, $end){
    for($x=1; $x < 10; $x++){
        echo $x;
    
}
}
echo Myrange(1,10);

// second task
echo "<br>";
echo "<br>";

function mySum(){
    $myarray = array(1,3,4,5,8);

     $sum = 0;
    foreach($myarray as $newarray){
        $sum += $newarray;
    }
    return $sum;
}

echo mySum();

?>