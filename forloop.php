<?php 

$i=2;
for($i=1;$i<=5;$i++){
    echo $i;
}




$super=array(
    "name"=>"srinu",
    "email"=>"srinubabu@lpu.in",
    "age"=>19
);
foreach($super as $key => $value){
    echo $key . " : " . $value . "<br>";

}
?>