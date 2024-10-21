<?php

// if(file_exists("myfile.txt")){
//     $file=fopen("myfile.txt","r");
//     echo fread($file,filesize("myfile.txt"));
//     fclose($file);
// }
// else{
//     die("Error. File doestnot exist");
// }

function customError($errrno,$errstr){
    echo "<br>Error:</br> [$errrno] $errstr";
}
set_error_handler("customError");
echo ($test);
?>