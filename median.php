<?php
$a=[1,2,3,4,5,6,8,9];
$n=count($a);
echo $n;
echo "<br>";

$median=0;
for($i=0;$i<$n;$i++){
    if($n%2==0){
        $median=(($n/2)+(($n/2)+1))/2;
    }
    else{
        $median=($n+1)/2;
    }
}
echo $median;
?>