<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/fonts.css" />
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/news.css"/>
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
          <h4 class="selected">News</h4>
          <a href="./champs.php"><h4 class="regular">Champions</h4></a>

          <h4 class="regular">Shop</h4>
          <a href="./sign-up.html"><h4 class="regular">Sign Up</h4></a>
        </div>
      </div>
    </header>

    <main>
      <div class="featured-container">
        <div class="title-container-featured">
          <h1 class="main-title">Featured News</h1>
        </div>
        <div class="line"></div>

        <a
          href="https://www.youtube.com/watch?v=1qGkmv80KD0"
          class="featured-news-container"
          id="featured-news-container"
        >
          <img id="featured-img" src="./images/hwei.jpg" alt="" />
          <div class="text-container-news">
            <p id="featured-type">GAME UPDATES</p>
            <h4 id="featured-title">Hwei Champion Spotlight</h4>
            <h5 id="featured-desc">
              Unlock your artistic potential with the Hwei Champion Spotlight.
            </h5>
            <h6 id="featured-date">2 Days ago</h6>
          </div>
        </a>

        <div class="slider-container">
          <p onclick="changeNews(true,false)">PREVIOUS NEWS</p>
          <p onclick="changeNews(false,true)">NEXT NEWS</p>
        </div>
      </div>

      <div class="latest-container">
        <div class="latest-container-divider">
          <div class="latest-news">
            <h1 class="main-title" style="color: white">Latest News</h1>
          </div>
        </div>
        <div class="latest-news-main-container">
          <div id="latest-news-left" class="latest-news-left">
            <?php
            include_once "../repository/newsRepository.php";
            $newsRepository = new NewsRepository();
            $news = $newsRepository->getAllNotFeaturedNews();
            if (isset($_POST['GameUpdatesBtn']) || isset($_POST['EsportsBtn']) || isset($_POST['DevBtn']) || isset($_POST['MediaBtn'])) {

              $news = $newsRepository->getNewsByType(array_shift($_POST));


              foreach ($news as $news_) {
                echo "<a href='' class='news-container' >
                  <img src=$news_[NewsImage] />
                  <div class='text-news-container'>
                    <div class='text-news-container'>
                      <p>$news_[NewsType]</p>
                      <h4>$news_[NewsHeader]</h4>
                      <h5>$news_[NewsDesc]</h5>
                      <h6>$news_[NewsTime]</h6>
                    </div>
                  </div>
                </a> ";
              }

              echo "<script>window.location.href='news.php#latest-news-left'</script>";

            } else {
              foreach ($news as $news_) {
                echo "<a href='' class='news-container' >
                  <img src=$news_[NewsImage] />
                  <div class='text-news-container'>
                    <div class='text-news-container'>
                      <p>$news_[NewsType]</p>
                      <h4>$news_[NewsHeader]</h4>
                      <h5>$news_[NewsDesc]</h5>
                      <h6>$news_[NewsTime]</h6>
                    </div>
                  </div>
                </a> ";
              }
            }


            ?>
          </div>
          <form  method="post" class="latest-news-right" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <button type="submit" value="GAME UPDATE" name="GameUpdatesBtn" class="img-type"><img  src="./images/news-group-1.png" alt=""/></button>
            <button type="submit" value="ESPORTS" name="EsportsBtn" class="img-type"><img  src="./images/news-group-2.png" alt=""/></button>
            <button type="submit" value="DEV" name="DevBtn" class="img-type"><img  src="./images/news-group-3.png" alt=""/></button>
            <button type="submit" value="MEDIA" name="MediaBtn" class="img-type"><img  src="./images/news-group-4.png" alt=""/></button>
          </form>
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

    <script src="./js/slider.js"></script>
  </body>
</html>
