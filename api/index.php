<?php
// Function to validate the entered password
function validatePassword($enteredPassword) {
    // Read the correct password from the text file
    $correctPassword = "sanmarino*";

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
          header("Location: /step3323432.php/", true, 301);
    } else {
        header("Location: /somethingwentwrong.txt/", false, 301);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/7/7c/Fortnite_F_lettermark_logo.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Candy Crush Hacks 2024</title>
  <style>
    @font-face {
  font-family: 'Comic Sans MS'; /* Choose a name for your font */
  src: url('comic-sans-ms/COMIC.TTF') format('woff2'); /* Path to your font file */
  /* You can include additional properties like font-weight, font-style, etc. */
}


* {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
}
input {
  text-align: center;
}

body {
   font-family: 'Comic Sans MS', sans-serif;'
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   height: 100vh;
   background: #2b2b2b;
   color: #fff;
   background-image: url('https://helios-i.mashable.com/imagery/articles/00OWdWk89IkIaNw4UMche72/hero-image.fill.size_1248x702.v1698407968.jpg');
    background-size: cover;
}
.container {

}

  i {
    color: white;
    font-family: "Comic Sans MS", sans-serif;
    text-align: left;
  }

  .ab {
    display: block;
    padding: 10px;
    background-color: black;
    color: white;
    text-decoration: none;
    margin: 20px;
  }

  /* Rainbow text */
  .rainbow {
    background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
    background-size: 400%;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: rainbow 10s linear infinite;
  }

  /* Animation for rainbow text */
  @keyframes rainbow {
    0% {
      background-position: 0%;
    }
    100% {
      background-position: 400%;
    }
  }
  </style>
</head>
<body>
  <script type="module">
    import { trailingCursor } from "https://unpkg.com/cursor-effects@latest/dist/esm.js";

    new trailingCursor();
  </script>
  <h1 class="rainbow">Candy Crush Hacks 2024</h1>
  <form method="post" action="">
    <br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="login" value="Login">
  </form>
  <br>
  <h3 class="rainbow">100% legit</h3>
  <br>
  <i class="rainbow">If you dont know the password then guess</i>
</body>
</html>
