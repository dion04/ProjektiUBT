<?php
session_start();

$password = isset($_SESSION['password']) ? $_SESSION['password'] : "noPass";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "noEmail";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once './navbar.php';
    ?>
    <link rel="stylesheet" href="./css/history.css">
</head>
<body>
    <div class="main-container">
        <div class="content-container">
        <h1>A brief story of League of Legends</h1>
        <h3>Humble Beginnings</h3>
        <p>
        Launched on October 27, 2009 and developed by Riot Games, League of Legends swiftly became one of the largest and most played games worldwide. Emerging from its precursor, Defense of the Ancients - a Warcraft 3 community map, the MOBA genre gained prominence in the gaming world, nurturing multiple generations of players who still remain active in 2023.
</p>    
        <p>
        The rich and expansive narrative that has shaped the gaming world within League of Legends merits an entire collection of essays, documentary films, and countless articles to capture its true essence. The passionate community that simultaneously loves and despises the game represents a global amalgamation, united by the shared experience of either frustration with underperforming teammates or shared laughter that arises during memorable moments on Summoner's Rift.
</p>
        <p>
        Whether assessing the game from an eSports perspective, considering its commercial significance, or simply evaluating its player base, League of Legends has consistently dominated every facet it has entered. It not only expanded the universe of Runeterra beyond the realm of video games but also bridged the gap to bring impactful storytelling to a broader audience, exemplified by the critically acclaimed animated series, 'Arcane.
        </p>
        <img src="./images/history-img-1.webp" alt="">
        <h3 style="margin-top:2%;">Legacy and Future</h3>
        <p>While not a pioneer in the MOBA genre, League of Legends stood on the shoulders of giants to achieve tremendous success among the gaming community. It introduced an accessible environment for anyone eager to try their hand at destroying the enemy team's Nexus. League of Legends offered various game modes like Twisted Treeline and Dominion, catering to different playstyles and ways to enjoy the game, which may seem strange as it currently only has two official maps available to players.</p>
        <p>By borrowing ideas from its contemporaries, League of Legends solidified its position as one of the go-to MOBAs in both casual and competitive scenes. It steadily grew its audience and community by acknowledging every individual player's contributions, be it through videos, fan art, feedback, guides, and by empowering creativity among content creators. It also shone a spotlight on the players who made League of Legends shine so brightly during its early launch years.</p>        
        <p>With its long track record and current prominence, the game is far from dying. Recent data shows that over 180 million players log in monthly to try climbing the solo queue ladder or casually throwing snowballs on ARAM. Moreover, with the World Championship 2023 currently taking place in South Korea, it's safe to say that the future holds many more positive and amazing experiences for both old and new fans of the game.</p>
        <img src="./images/history-img-2.webp" alt="">
        <h3 style="margin-top:2%;">Conclusion</h3>
        <p>As Season 13 of competitive play comes to a close, it's a time for reflection on the broken champion builds, frustrating metas, game-breaking bugs, and quirky interactions with other players. League of Legends has been, is, and will continue to be a catalyst for future generations, pushing the gaming community to new heights. Players who grew up spamming solo queue at 3 AM will be at the forefront of a revolutionary wave, creating awe-inspiring and accommodating video game experiences for millions to enjoy.</p>
        <p>Despite its occasional negative aspects and toxicity, League of Legends will forever stand as one of the most successful passion projects, created by ordinary people simply wanting to play and enrich their lives. Whether through captivating stories, breathtaking characters, precise and enjoyable gameplay, we are all in constant pursuit of the next great thing in our lives. If League is no longer that for some, it will undoubtedly inspire someone, someday, to create even more heartwarming moments for others to cherish.</p>
        <img src="./images/history-img-3.webp" alt="">

    </div>

    <footer>
      <div class="footer-container">
        <div class="logo">
          <img id="img-footer" class="img-class-footer" src="./images/logo-footer.png" alt="" />
        </div>
      </div>
    </footer>
    </div>

   
    
</body>
</html>