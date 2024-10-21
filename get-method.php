<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["name"])){
        echo"<p>Hi,".$_POST["name"]."</p>";
    }
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="inputname">Name:
            
        </label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="submit">

    </form>

    
</body>
</html>

<!-- sanititaton in php
 

// "___abcd___"  trim();
// /,\ "abcd" remove white spaces & stripslashes();
//< , &lt, > &gt html\char paster();
-->