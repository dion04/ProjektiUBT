
<?php
$userId = $_GET['id'];
include_once '../repository/userRepository.php';



$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?= $user['UserID'] ?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?= $user['UserName'] ?>"> <br> <br>
        <input type="text" name="surname"  value="<?= $user['UserSurname'] ?>"> <br> <br>
        <input type="text" name="phone"  value="<?= $user['UserPhone'] ?>"> <br> <br>
        <input type="text" name="country"  value="<?= $user['UserCountry'] ?>"> <br> <br>
        <input type="text" name="birthday"  value="<?= $user['UserBirthday'] ?>"> <br> <br>
        <input type="text" name="email"  value="<?= $user['UserEmail'] ?>"> <br> <br>
        <input type="text" name="password"  value="<?= $user['UserPassword'] ?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php

if (isset($_POST['editBtn'])) {
    $id = $user['UserID'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepository->updateUser($id, $name, $surname, $phone, $country, $birthday, $email, $password);
    header("location:dashboard.php");
}


?>