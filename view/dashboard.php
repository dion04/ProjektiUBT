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
</head>
<body>
    

    <table border="1">
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
    </table>

</body>
</html>