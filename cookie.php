<?php
// Set cookies
setcookie("user", "user1", time() + 3600, "/");
setcookie("name", "john", time() + 3600, "/");
?>
<html>
    <body>
        <?php
        // Check if the "user" cookie is set
        if(!isset($_COOKIE["user"])){
            echo "Cookie 'user' is not set!";
        }
        else{
            echo "Cookie 'user' is set! <br>";
            echo "Value: " . $_COOKIE["user"] . "<br>";
            print_r($_COOKIE); // Print all cookies
        }
        ?>
    </body>
</html>
