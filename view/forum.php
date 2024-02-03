
<?php
include_once '../repository/discussionsRepository.php';

$discussionRepository = new DiscussionsRepository();
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    echo "<script>alert('You need to Login/Signup to access Forum.')
        window.location.href='./index.php';
        </script>
        ";
}

if (isset($_POST['Patch']) || isset($_POST['News']) || isset($_POST['Champs']) || isset($_POST['General'])) {
    $discussionType = array_shift($_POST);

} else {
    $discussionType = array_shift($_POST);
}
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
    <link rel="stylesheet" href="./css/fonts.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/forum.css">

</head>

<body>
    <div class="main-container-forum">
    <div class="navbar-vertical">
        <div class="user">
            <?php
            echo "
            <h1>$user[UserName] $user[UserSurname]</h1>
            <h4>$user[UserEmail]</h4>
            "
                ?>
            
        </div>
        <form class="nav-links" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <button type="submit" value="" name="" class="nav-link">
            <h1>All</h1>
            <?php
            $discussions = $discussionRepository->getAllDiscussions();
            $count = count($discussions);
            echo "
            <h4>$count Posts</h4>
            ";
            ?>
            </button>
            <button type="submit" value="Patch" name="Patch" class="nav-link">
            <h1>Patch</h1>
            <?php
            $discussions = $discussionRepository->getDiscussionByType("Patch");
            $count = count($discussions);
            echo "
            <h4>$count Posts</h4>
            ";
            ?>
            </button>
            <button type="submit" value="News" name="News" class="nav-link">
            <h1>News</h1>
            <?php
            $discussions = $discussionRepository->getDiscussionByType("News");
            $count = count($discussions);
            echo "
            <h4>$count Posts</h4>
            ";
            ?>
            </button>
            <button type="submit" value="Champs" name="Champs" class="nav-link">
            <h1>Champs</h1>
            <?php
            $discussions = $discussionRepository->getDiscussionByType("Champs");
            $count = count($discussions);
            echo "
            <h4>$count Posts</h4>
            ";
            ?>
            </button>
            <button type="submit" value="General" name="General" class="nav-link">
            <h1>General</h1>
            <?php
            $discussions = $discussionRepository->getDiscussionByType("General");
            $count = count($discussions);
            echo "
            <h4>$count Posts</h4>
            ";
            ?>
            </button>
            
        </form>
        <div class="ver-nav-button-container">
        <a href="./addDisc.php" class="ver-nav-button">New Discussion</a>
        </div>


        </div>
        <div class="main-body">
            <div class="body-container">
                <div class="body-title">
                    <?php
                    echo "<h1>$discussionType Forum</h1>";
                    ?>
                </div>
                <div class="disc-info">
                    <p style="width:35%;">Discussions</p>
                    <p style="width:21.25%;">Date</p>
                    <p style="width:21.25%;">By</p>
                    <p style="width:21.25%;">Latest</p>
                    <p style="width:21.25%; margin-right:-10%;">Open</p>
                </div>
                <?php

                if ($discussionType) {
                    $discussions = $discussionRepository->getDiscussionByType($discussionType);

                    foreach ($discussions as $discussion) {
                        $user = $discussionRepository->getUserByUserID($discussion['UserID']);

                        $discussion['DiscussionDate'] = date("d/m/Y", strtotime($discussion['DiscussionDate']));
                        echo "
                        <div class='discussion-container'>
                        <p style='width:35%;'>$discussion[DiscussionHeader]</p>
                        <p style='width:21.25%;'>$discussion[DiscussionDate]</p>
                        <p style='width:21.25%;'>$user[UserName] $user[UserSurname]</p>
                        ";
                        if (is_null($discussion['DiscussionLatest'])) {
                            echo "
                        <p style='width:21.25%;'>No Comments</p>
                            ";
                        } else {
                            echo "
                        <p style='width:21.25%;'>$discussion[DiscussionLatest]</p>
                            ";
                        }
                        echo "
                        <a style='width:21.25%; margin-right:-10%; text-decoration:none;' href='discussion.php?id=$discussion[DiscussionID]'>Link</a>
                    </div>
                        ";
                    }
                } else {
                    $discussions = $discussionRepository->getAllDiscussions();

                    foreach ($discussions as $discussion) {
                        $user = $discussionRepository->getUserByUserID($discussion['UserID']);

                        $discussion['DiscussionDate'] = date("d/m/Y", strtotime($discussion['DiscussionDate']));
                        echo "
                        <div class='discussion-container'>
                        <p style='width:35%;'>$discussion[DiscussionHeader]</p>
                        <p style='width:21.25%;'>$discussion[DiscussionDate]</p>
                        <p style='width:21.25%;'>$user[UserName] $user[UserSurname]</p>
                        ";
                        if (is_null($discussion['DiscussionLatest'])) {
                            echo "
                        <p style='width:21.25%;'>No Comments</p>
                            ";
                        } else {
                            echo "
                        <p style='width:21.25%;'>$discussion[DiscussionLatest]</p>
                            ";
                        }
                        echo "
                        <a style='width:21.25%; margin-right:-10%; text-decoration:none;' href='discussion.php?id=$discussion[DiscussionID]'>Link</a>
                    </div>
                        ";
                    }
                }


                ?>
            </div>
        </div>
    </div>
</body>
</html>