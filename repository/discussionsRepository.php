<?php
include_once '../database/databaseConnection.php';
;

class DiscussionsRepository
{
    private $connection;

    function __construct()
    {
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    function getAllDiscussions()
    {
        $conn = $this->connection;
        $sql = "SELECT * FROM discussion";
        $statement = $conn->query($sql);
        $discussions = $statement->fetchAll();

        return $discussions;

    }

    function getUserByUserID($userID)
    {
        $conn = $this->connection;
        $sql = "SELECT * FROM users WHERE UserID = $userID";
        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function getDiscussionByDiscussionID($discussionID)
    {
        $conn = $this->connection;
        $sql = "SELECT * FROM discussion WHERE DiscussionID = $discussionID";
        $statement = $conn->query($sql);
        $discussion = $statement->fetch();

        return $discussion;
    }

    function getDiscussionByType($type)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM discussion WHERE DiscussionType='$type'";

        $statement = $conn->query($sql);
        $discussions = $statement->fetchAll();
        return $discussions;
    }

    function insertDiscussion($discussion)
    {

        $conn = $this->connection;

        $id = $discussion->getId();
        $header = $discussion->getHeader();
        $type = $discussion->getType();
        $text = $discussion->getText();
        $userID = $discussion->getUserID();

        $sql = "INSERT INTO discussion (DiscussionID,DiscussionHeader,DiscussionText,DiscussionType,UserID) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $header, $text, $type, $userID]);

        header("Location: ./forum.php");

    }

}

?>