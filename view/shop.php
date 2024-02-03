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
</head>
<body>
    <?php
    echo $email . " " . $password;
    ?>
    
</body>
</html>