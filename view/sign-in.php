<?php
include_once '../repository/userRepository.php';

session_start();

if (isset($_POST['signIn'])) {
  $userRepository = new UserRepository();

  if ($userRepository->getUserByEmailAndPassword($_POST['email'], $_POST['password'])) {
    $user = $userRepository->getUserByEmailAndPassword($_POST['email'], $_POST['password']);
    $_SESSION['email'] = $user['UserEmail'];

    $_SESSION['password'] = $user['UserPassword'];
    $_SESSION['role'] = $user['UserRole'];
    $_SESSION['user'] = $user;
    header('Location: index.php');
  } else {
    echo "EMAIL OR PASSWORD INCORRECT";
  }


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php
    include_once './navbar.php';
    ?>
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/sign-up.css" />
    <style>
      .single-input-container input {
        height: 60px;
      }
      #first-input-container {
        margin-top: 20%;
        margin-bottom: 0px;
      }
    </style>
  </head>
  <body>
    <div class="main-container">
      <div class="left-container">
        <div class="image-caption">
          <h4>Welcome Back Player</h4>
          <h5>
            Dive straight into<br />
            Summoners Rift
          </h5>
        </div>

        <img
          style="width: 250%; filter: brightness(60%)"
          src="./images/sign-in-image.jpg"
          alt=""
        />
        <p>© 2023 by Atlas. All Rights reserved.</p>
      </div>
      <form style="width: 65%; background-color: white; display: flex; flex-direction: column;" id="form" action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post" class="right-container">
        <div class="header-container">
          <h1 class="header">Welcome Back</h1>
        </div>

        <div id="first-input-container" class="single-input-container">
          <input required id="email" name="email" placeholder="Email" />
        </div>
        <div style="margin-top: 2%" class="single-input-container">
          <input
            id="password"
            type="password"
            name="password"
            placeholder="Password"
            required
          />
        </div>
        <div style="margin-top: 25%" class="button-container">
          <input onclick="validateForm()" type="submit" name="signIn" value="Sign In" />
          <p>Dont have an account? <a href="./sign-up.php">Sign Up</a></p>
        </div>
      </form>
    </div>

    
    <script src="./js/sign-in.js"></script>
  </body>
</html>
