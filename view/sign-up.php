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
  </head>
  <body>
  
    <div class="main-container">
      <div class="left-container">
        <div class="image-caption">
          <h4>The Adventure Starts Here</h4>
          <h5>Create an account to join the comunity</h5>
        </div>

        <img src="./images/sign-up-image.webp" alt="" />
        <p>© 2023 by Atlas. All Rights reserved.</p>
      </div>
      <form id="form" action="<?php $_SERVER['PHP_SELF'] ?>" class="right-container" method="post">
        <div class="header-container">
          <h1 class="header">Create Account</h1>
        </div>

        <div style="margin-top: 10%" class="double-input-container">
          <input
            type="text"
            id="name"
            required
            name="name"
            placeholder="Name"
          />

          <input
            type="text"
            id="surname"
            name="surname"
            required
            placeholder="Surname"
          />
        </div>
        <div class="double-input-container">
          <input
            required
            type="text"
            id="phone"
            name="phone"
            placeholder="Phone"
          />

          <input
            type="text"
            id="country"
            name="country"
            required
            placeholder="Country"
          />
        </div>
        <div class="double-input-container">
          <input
            id="birthday"
            type="text"
            onfocus="(this.type='date')"
            onblur="(this.type='text')"
            name="birthday"
            required
            placeholder="Birthday"
          />
          <select required id="gender" name="gender" placeholder="gender">
            <option value="" disabled selected>Select your gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="O">Other</option>
          </select>
        </div>
        <div class="single-input-container">
          <input required id="email" name="email" placeholder="Email" />
        </div>
        <div class="single-input-container">
          <input
            id="password"
            type="password"
            name="password"
            placeholder="Password"
            required
          />
        </div>
        <div class="button-container">
          <input type="submit" name="signUpBtn" value="Sign Up" />
          <p>Already have an account? <a href="./sign-in.php">Sign In</a></p>
        </div>
      </form>
      <?php include_once '../controller/registerController.php'; ?>
    </div>
  </body>
</html>
