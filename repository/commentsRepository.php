<?php
ob_start();

include_once '../database/databaseConnection.php';
;

class CommentsRepository
{
    private $connection;

    function __construct()
    {
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    function getAllCommentsByDiscussionId($discussionID)
    {
        $conn = $this->connection;
        $sql = "SELECT * FROM comment WHERE DiscussionID = $discussionID";
        $statement = $conn->query($sql);
        $comments = $statement->fetchAll();

        return $comments;

    }

    function insertComment($comment, $discussionID)
    {
        $conn = $this->connection;

        $id = $comment->getId();
        $text = $comment->getText();
        $userID = $comment->getUserID();
        $disscusionID = $comment->getDiscussionID();

        $sql = "INSERT INTO comment (ComentID, CommentText, UserID, DiscussionID) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $text, $userID, $disscusionID]);

        header("Location: ./discussion.php?id=$discussionID");
    }
}

?>