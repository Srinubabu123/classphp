<?php
// $binary = "11";
// $decimal = BinarytoDeci($binary);
// print_r($decimal);
// function BinarytoDeci($binary)
// {
//     return decbin($binary);
//     //return bindec($binary);
// }


// $str ="hello";
// // $copy = Copy($str);
// // print_r($copy);
// // function Copy($str){
// //     $c = ""; // Initialize an empty string
// //     for($i = 0; $i < strlen($str); $i++){
// //         $c += $str[$i]; // Concatenate each character
// //     }
// //     return $c;
// // }


//  // Output: hello

// function isAlphabet($char){
//     return ctype_alpha($char);
// }
// $char='A';
// if(isAlphabet($char)){
//     echo "true";
// }
// else{
//     echo "NO";
// }

$num=4;
$sum=0;
$i=1;

while($i<=$num){
    $sum+=$i;
    $i++;
}

echo $sum;

// $arr=[1,1,2,4];
// $fre=array_count_values($arr);

// foreach($fre as $key => $value){
//     if($value==1){
//         echo $key." ";
//     }
// }
// function length($str){
//     $count=0;
//     while(isset($str[$count])){
//         $count++;
//     }
//     return $count;

// }
// echo length($str);

// function fib($n){
//     $f=0;
//     $s=1;
//     $sum=0;
//     for($i=2;$i<$n;$i++){
        
        
//         $next=$f+$s;
//         $sum=$sum+$next;
//         echo $next;
//         $f=$s;
//         $s=$next;
//     }
//     echo " , ",$sum;

// }
// $n=10;
// fib($n);


// function isPrime($num){
//     if($num<2){
//         return false;
//     }
//     for($i=0;$i<=sqrt($num);$i++){
//         if($num%2==0){
//             return false;
//         }
//     }
//     return true;
// }
// $start=0;
// $end=100;
// for($i=$start;$i<$end;$i++){
//     if(isPrime($i)){
//         echo "$i ";
//     }
// }

?>