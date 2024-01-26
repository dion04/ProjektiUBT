<?php
include_once '../repository/userRepository.php';
include_once '../models/user.php';

if (isset($_POST['signUpBtn'])) {
    if (
        empty($_POST['name']) ||
        empty($_POST['surname']) ||
        empty($_POST['email']) ||
        empty($_POST['phone']) ||
        empty($_POST['country']) ||
        empty($_POST['birthday']) ||
        empty($_POST['gender']) ||
        empty($_POST['password'])
    ) {
        echo "Fill all fields!";
    } else {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $id = rand(100, 100000);
        $user = new User($id, $name, $surname, $phone, $country, $birthday, $gender, $email, $password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }

}
?>