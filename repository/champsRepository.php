<?php
include_once '../database/databaseConnection.php';
;

class ChampsRepository
{
    private $connection;

    function __construct()
    {
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function getAllUsers()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getAllChamps()
    {
        $conn = $this->connection;
        $sql = "SELECT * FROM champions";
        $statement = $conn->query($sql);
        $champs = $statement->fetchAll();

        return $champs;

    }

}

//  $userRepo = new UserRepository;

//  $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>