<?php
// Function to validate the entered password
function validatePassword($enteredPassword) {
    // Read the correct password from the text file
    $correctPassword = ""Callum Cardy;

    // Check if the entered password matches the correct password
    if ($enteredPassword === $correctPassword) {
        return true;
    } else {
        return false;
    }
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered password from the form
    $enteredPassword = isset($_POST['password']) ? $_POST['password'] : '';

    // Validate the entered password
    if (validatePassword($enteredPassword)) {
          header("Location: /notavirus100%legitrealnohacks.exe/", true, 301);
    } else {
        header("Location: /somethingwentwrong.txt/", false, 301);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="https://cdn3.vectorstock.com/i/1000x1000/71/17/lock-icon-vector-25237117.jpg">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>final step</title>
</head>
<body>
  <script type="module">
    import { trailingCursor } from "https://unpkg.com/cursor-effects@latest/dist/esm.js";

    new trailingCursor();
  </script>
  <h1 class="rainbow">FINAL STEP</h1>
  <form method="post" action="">
    <br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="login" value="Login">
  </form>
  <br>
  <h3 class="rainbow">Enter Full Name</h3>
  <br>
  <i class="rainbow">...</i>
</body>
</html>
