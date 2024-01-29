<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Form</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form is submitted

    // Get content from the textbox
    $textboxContent = isset($_POST['textbox']) ? $_POST['textbox'] : '';

    // Send a request to the verification server
    $verificationUrl = "https://verify.pythonscratcher.net?email=" . urlencode($textboxContent);
    $verificationResponse = file_get_contents($verificationUrl);

    // Display another form to enter the content of the response page
    echo '<form method="post" action="">
            <label for="verificationResponse">Enter verification code:</label>
            <textarea id="verificationResponse" name="verificationResponse" required></textarea>
            <br>
            <input type="submit" value="Submit">
          </form>';

} else {
    // Display the initial form
    echo '<form method="post" action="">
            <label for="textbox">Enter email:</label>
            <input type="text" id="textbox" name="textbox" required>
            <br>
            <input type="submit" value="Submit">
          </form>';
}
?>

</body>
</html>
