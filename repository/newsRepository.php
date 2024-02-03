<?php
include_once '../database/databaseConnection.php';
;

class NewsRepository
{
    private $connection;

    function __construct()
    {
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    function getAllNews()
    {
        $conn = $this->connection;
        $sql = "SELECT * FROM news";
        $statement = $conn->query($sql);
        $news = $statement->fetchAll();

        return $news;

    }

    function getAllFeaturedNews()
    {
        $conn = $this->connection;
        $sql = "SELECT * FROM news WHERE Featured = 1";
        $statement = $conn->query($sql);
        $news = $statement->fetchAll();

        return $news;

    }

    function getAllNotFeaturedNews()
    {
        $conn = $this->connection;
        $sql = "SELECT * FROM news WHERE Featured = 0";
        $statement = $conn->query($sql);
        $news = $statement->fetchAll();

        return $news;

    }

    function getNewsById($id)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM news WHERE NewsID='$id'";

        $statement = $conn->query($sql);
        $news = $statement->fetch();

        return $news;
    }

    function getNewsByType($type)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM news WHERE NewsType='$type'";

        $statement = $conn->query($sql);
        $news = $statement->fetchAll();
        return $news;
    }

}
?>