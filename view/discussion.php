<?php
session_start();
ob_start();

$discussionID = $_GET['id'];
include_once '../repository/discussionsRepository.php';
include_once '../repository/userRepository.php';
include_once '../repository/commentsRepository.php';

$discussionRepository = new DiscussionsRepository();
$userRepository = new UserRepository();
$commentRepository = new CommentsRepository();
$discussion = $discussionRepository->getDiscussionByDiscussionID($discussionID);
$user = $userRepository->getUserById($discussion['UserID']);


$discussionHeader = $discussion["DiscussionHeader"];
$discussionType = $discussion["DiscussionType"];
$discussionText = $discussion["DiscussionText"];


$userName = $user['UserName'];
$userSurname = $user['UserSurname'];
$userEmail = $user['UserEmail'];

$comments = $commentRepository->getAllCommentsByDiscussionID($discussion["DiscussionID"]);



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
    <link rel="stylesheet" href="./css/discussion.css">
</head>
<body>
    
    <div class="container">
        <div class="main-container">
            <div class="discussion-nav">
                <div class="user-container">
                <?php
                echo "
                    <h3>$userName $userSurname</h3>
                    <h5>$userEmail</h5>
                ";
                ?>
                </div>
                
                <h1><?php echo "$discussionHeader"; ?></h1>
                <h3><?php echo "$discussionType"; ?></h3>

            </div>
            <div class="discussion">
            <div class="discussion-text">
                <p>
                <?php echo "$discussionText"; ?>
                </p>
            </div>
            <h1>Comments:</h1>
            <?php
            foreach ($comments as $comment) {
                $userComment = $userRepository->getUserById($comment['UserID']);
                echo "
                    <div class='discussion-comment'>
                        <p style='width:80%;'>$comment[CommentText]</p>
                        <p>By $userComment[UserName] $userComment[UserSurname]</p>
                    </div>
                    ";
            }
            ?>

            


            
            </div>
            

            <form class="discussion-comments" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <?php
                echo "
                    <input name='userID' value=$user[UserID] hidden />
                    <input name='discussionID' value=$discussion[DiscussionID] hidden />
                    ";
                ?>
                


                <textarea name="text" id="" cols="70" rows="9"></textarea>
                <input type="submit" name="addComment" value="Add Comment">
            </form>
        <?php include_once '../controller/commentController.php'; ?>

        </div>
    </div>
</body>
</html>