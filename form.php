<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if (isset($_POST["name"]) && isset($_POST["email"])) {

        echo "<p> hii " . htmlspecialchars($name) . " email is " . htmlspecialchars($email) . "<p>";
    }
    ?>

    <form method="POST" action="">
        <input type="name" name="name" placeholder="name"><br>
        <input type="email" name="email" placeholder="emial "><br>
        <button type="submit" value="submit">submit</button>
    </form>
</body>

</html>