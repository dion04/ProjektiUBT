<?php

if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
} else {
  echo "";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/fonts.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/navbar.css" />
  </head>
  <body>
    <header>
      <div class="navbar">
        <div class="logo">
          <img class="img-class" src="./images/logo.png" alt="" />
          <h4>ATLAS</h4>
        </div>

        <div class="nav-content">
        <a href="./index.php"><h4 class="regular">Home</h4></a>
        <a href="./forum.php"><h4 class="regular">Forum</h4></a>

          <a href="./news.php"><h4 class="regular">News</h4></a>
          <a href="./champs.php"><h4 class="regular">Champions</h4></a>

          <a href="./shop.php"><h4 class="regular">Shop</h4></a>
          <?php
          if (isset($user)) {

            echo "
              <a href='./sign-out.php'><h4 class='regular'>Log out</h4></a>
              ";

          } else {
            echo "
              <a href='./sign-up.php'><h4 class='regular'>Sign Up</h4></a>
              ";
          }
          ?>
        </div>
      </div>
    </header>
  </body>
</html>