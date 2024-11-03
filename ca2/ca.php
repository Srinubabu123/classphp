<?php
// Initialize variables to hold feedback data and error messages
$name = $email = $feedback = "";
$errorMessage = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $feedback = test_input($_POST["feedback"]);

    // Validate input
    if (empty($name) || empty($email) || empty($feedback)) {
        $errorMessage = "Please fill out all fields.";
    } else {
        // Sanitize input
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $feedback = htmlspecialchars($feedback);

        // Process the form data (e.g., save to database or send email)
        // For demonstration, we will just display a thank you message
        echo "Thank you for your feedback, $name!";
        exit; // Stop further processing
    }
}

// Function to sanitize user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback Form</title>
</head>
<body>

<h2>User Feedback Form</h2>

<!-- Display error message if any -->
<?php if (!empty($errorMessage)): ?>
    <p style="color:red;"><?php echo $errorMessage; ?></p>
<?php endif; ?>

<!-- Feedback form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
    Email: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
    Feedback: <textarea name="feedback"><?php echo htmlspecialchars($feedback); ?></textarea><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>