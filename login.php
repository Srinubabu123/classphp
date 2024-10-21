<?php

    session_start();

    $_SESSION["username"]="srinu";
    $_SESSION["role"]="admin";

    echo "welcome user ".$_SESSION["username"]."<br>";
    echo "Welcome to the login page.your session is getting started...........";


    // session_unset();
    // session_destroy();
    // echo "you have logged out"
    

 
?>