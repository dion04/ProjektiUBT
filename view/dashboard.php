<?php
session_start();

$password = isset($_SESSION['password']) ? $_SESSION['password'] : "noPass";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "noEmail";
$role = isset($_SESSION['role']) ? $_SESSION['role'] : "noRole";
if ($role != "A") {
    echo "You are not an admin!!";
    return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/fonts.css">
</head>
<body>


    <div class="main-container">
        <div class="navbar-vertical">
        <div class="logo">
          <img class="img-class" src="./images/logo.png" alt="" />
          <h4>ATLAS</h4>
        </div>
        <div class="nav-links">
            <h1 class="focus">Users</h1>
            <h1>Shop</h1>
            <h1>News</h1>
            <h1>Champs</h1>
        </div>

        </div>
        <div class="main-body">
            <div class="top-container">
                <h1>Users</h1>
            </div>
            <div class="body-container">
                <?php
                include_once '../repository/userRepository.php';

                $userRepository = new UserRepository();

                $users = $userRepository->getAllUsers();

                foreach ($users as $user) {
                    echo
                        "
                        <div class='card'>
                    <div class='card-text'>
                        <h3>UserID: $user[UserID]</h3>
                        <h3>Name: $user[UserName] $user[UserSurname] </h3>
                        <h3>Phone: $user[UserPhone]</h3>
                        <h3>Gender: $user[UserGender]</h3>
                        <h3>Country: $user[UserCountry]</h3>
                        <h3>Email: $user[UserEmail]</h3>
                        <h3>Password: $user[UserPassword]</h3>
                        <h3>Role: $user[UserRole]</h3>
                    </div>
                    <div class='card-buttons'>
                        <a style='background-color: #345F3C;' href='edit.php?id=$user[UserID]'>Edit</a>
                        <a style='background-color: #D42E22;' href='delete.php?id=$user[UserID]'>Delete</a>
                    </div>
                </div>
                ";
                }



                ?>
            </div>
        </div>
    </div>



    

    <!-- <table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>PHONE</th>
                 <th>COUNTRY</th>
                 <th>BIRTHDAY</th>
                 <th>EMAIL</th>
                 <th>PASSWORD</th>
                 <th>ROLE</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php
             include_once '../repository/userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach ($users as $user) {
                 echo
                     "
                <tr>
                     <td>$user[UserID]</td>
                     <td>$user[UserName]</td>
                     <td>$user[UserSurname] </td>
                     <td>$user[UserPhone] </td>
                     <td>$user[UserCountry] </td>
                     <td>$user[UserBirthday] </td>
                     <td>$user[UserEmail] </td>
                     <td>$user[UserPassword] </td>
                     <td>$user[UserRole] </td>
                     <td><a href='edit.php?id=$user[UserID]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[UserID]'>Delete</a></td>
                     
                </tr>
                ";
             }



             ?>
    </table> -->

</body>
</html>