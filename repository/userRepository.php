<?php
include_once '../database/databaseConnection.php';

class UserRepository
{
    private $connection;

    function __construct()
    {
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user)
    {

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $phone = $user->getPhone();
        $country = $user->getCountry();
        $birthday = $user->getBirthday();
        $gender = $user->getGender();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO users (UserID,UserName,UserSurname,UserPhone,UserCountry,UserBirthday,UserGender,UserEmail,UserPassword,UserRole) VALUES (?,?,?,?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $name, $surname, $phone, $country, $birthday, $gender, $email, $password, "U"]);

        header("Location: ./sign-in.html");

    }


    function getAllUsers()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE UserID='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function getUserByEmailAndPassword($email, $password)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE UserEmail='$email' AND UserPassword='$password'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id, $name, $surname, $phone, $country, $birthday, $email, $password)
    {
        $conn = $this->connection;

        $sql = "UPDATE users SET UserName=?, UserSurname=?, UserEmail=?, UserPhone=?,UserCountry=?,UserBirthday=?, UserPassword=? WHERE UserID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name, $surname, $email, $phone, $country, $birthday, $password, $id]);

        echo "<script>alert('update was successful'); </script>";
    }

    function deleteUser($id)
    {
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE UserID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    }
}
?>