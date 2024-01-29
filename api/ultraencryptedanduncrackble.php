<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve user input
    $userIP = $_POST['ip_address'];

    // Check if the entered IP matches the actual IP
    if ($userIP === $_SERVER['REMOTE_ADDR']) {
        // Successful login, redirect or perform other actions
        header("step3323423.php");
        exit();
    } else {
        // Failed login, redirect or show an error message;
        header("Location: /somethingwentwrong.txt/");
        exit();
    }
} 
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verification step for extra saftey</title>
</head>
<body>
    <h2>Next step for verification</h2>
    <form action="process_login.php" method="post">
        <label for="ip_address">Your IP Address:</label>
        <input type="text" name="ip_address" required>
        <br>
        <input type="submit" value="Continue">
    </form>
</body>
</html>



