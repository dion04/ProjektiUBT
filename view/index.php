<?php
session_start();

$password = isset($_SESSION['password']) ? $_SESSION['password'] : "noPass";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "noEmail";
$role = isset($_SESSION['role']) ? $_SESSION['role'] : "noRole";
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
  <?php
  include_once './navbar.php';
  ?>

    <main>
      <div class="main-container">
        <img class="main-container-img" src="./images/poster-3.jpg" alt="" />
        <div class="text-container">
          <div class="text-container-main">
            <h1>LEAGUE OF LEGENDS</h1>
            <p>
              A strategy co-op game in which two teams of five powerful
              champions battle each other in an attempt to destroy an enemy
              base. Choose your character from over 140 champions, create epic
              moments, earn kills and demolish towers on your way to victory.
            </p>
          </div>
        </div>
        <div class="dots-container">
          <div class="dot-1"></div>
          <div class="dot-2"></div>
          <div class="dot-3"></div>
        </div>
      </div>
      <div class="middle-container"></div>
      <div class="second-main-container">
        <div class="text-container-second">
          <h1>Join the League</h1>
        </div>
        <div class="photos-container">
          <div class="inside-images-container">
            <div class="image-1">
              <img src="./images/poster-2.jpg" alt="" />
              <div class="image-text-container">
                <h6 id="image-1-heading">Battle Head-to-Head</h6>
                <p id="image-1-paragraph">
                  Combine strategic thinking, lightning reflexes and coordinated
                  team-play to crush your enemies in both small-scale skirmishes
                  and intense 5v5 battles.
                </p>
              </div>
            </div>
            <div class="image-2">
              <img src="./images/poster-3.jpg" alt="" />
              <div class="image-text-container">
                <h6 id="image-2-heading">Play with your team</h6>
                <p id="image-2-paragraph">
                  In League of Legends, victory is often the result of a
                  collective effort, emphasizing the significance of teamwork<br />
                  in the pursuit of success on the Summoner's Rift.
                </p>
              </div>
            </div>
          </div>

          <div class="image-3">
            <img src="./images/poster-1.jpg" alt="" />
            <div class="image-text-container">
              <h6 id="image-3-heading">Over 150 champions</h6>
              <p id="image-3-paragraph">
                The constant addition of new champions and periodic updates to
                the game ensure a continually expanding and evolving selection
                for players.
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <div class="footer-container">
        <div class="logo">
          <img class="img-class-footer" src="./images/logo-footer.png" alt="" />
        </div>
      </div>
    </footer>
  </body>
</html>
