<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/fonts.css" />
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/champs.css" />
  </head>
  <body>
    <header>
      <div class="navbar">
        <div class="logo">
          <img class="img-class" src="./images/logo.png" alt="" />
          <h4>ATLAS</h4>
        </div>

        <div class="nav-content">
          <a href="./index.html"><h4 class="regular">Home</h4></a>
          <a href="./news.html"><h4 class="regular">News</h4></a>

          <h4 class="selected">Champions</h4>
          <h4 class="regular">Shop</h4>
          <a href="./sign-up.html"><h4 class="regular">Sign Up</h4></a>
        </div>
      </div>
    </header>

    <main>
      <div class="banner-container">
        <div class="text-container">
          <h1>Choose Your Champion</h1>
        </div>
        <img src="./images/banner-2.png" alt="" />
      </div>

      <div class="main-container">
      <?php
      $links = array("https://www.youtube.com/watch?v=GcR1_McnJbU", "https://www.youtube.com/watch?v=SGxQAs9ULWY", "https://www.youtube.com/watch?v=n-KWeg-9GVU", "https://www.youtube.com/watch?v=pK4VLNk7uBc", "https://www.youtube.com/watch?v=fkM20LgOdKQ", "https://www.youtube.com/watch?v=QvNw0A-D0T0", "https://www.youtube.com/watch?v=Y-gsY5oAsL0", "https://www.youtube.com/watch?v=-tNDoXIYptk");
      include_once '../repository/champsRepository.php';

      $champRepository = new ChampsRepository();

      $champs = $champRepository->getAllChamps();
      $i = 0;
      foreach ($champs as $champ) {

        if ($champ['ChampID'] % 2 == 1) {
          echo "
        <a href=$links[$i] class='champ-container'>
        <div class='champ-text-container'>
          <h1>$champ[ChampName]</h1>
          <h2>$champ[ChampTitle]</h2>
          <div class='champ-desc-container'>
            <p>
              $champ[ChampDesc]
            </p>
          </div>
          <h2>$champ[ChampLane]</h2>
        </div>
        <img class='champ-img' src=$champ[ChampImage] />
      </a>
        ";
          $i++;
        } else {
          echo "
        <a href=$links[$i] class='champ-container'>
        <img class='champ-img' src=$champ[ChampImage] />
        <div class='champ-text-container'>
          <h1>$champ[ChampName]</h1>
          <h2>$champ[ChampTitle]</h2>
          <div class='champ-desc-container'>
            <p>
              $champ[ChampDesc]
            </p>
          </div>
          <h2>$champ[ChampLane]</h2>
        </div>
      </a>
        ";
          $i++;
        }

      }



      ?>
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
