<?php
include_once '../repository/userRepository.php';

session_start();

$user = $_SESSION['user'];
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
        margin-top: 5%;
        margin-bottom: 0px;
      }
      textarea {
        box-sizing: border-box;
  border:none;
  background-color: #F4F5F8;
  resize: none;
    }
    </style>

    <script>
        document.getElementById('submit-btn').addEventListener('click', 
    function(event) {
   
        // Handle the form data
        event.preventDefault();
});
    </script>
  </head>
  <body>
    <div class="main-container">
      <div class="left-container">
        <div class="image-caption">
          <h4>Add to Atlas Forum.</h4>
          <h5>
            Create a new Discussion
          </h5>
        </div>

        <img
          style="width: 250%; filter: brightness(60%)"
          src="./images/sign-in-image.jpg"
          alt=""
        />
        <p>© 2023 by Atlas. All Rights reserved.</p>
      </div>
      <form style="width: 65%; background-color: white; display: flex; flex-direction: column;" id="form" action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" class="right-container">
        <div class="header-container">
          <h1 class="header">Add Discussion</h1>
        </div>

        <div id="first-input-container" class="single-input-container">
          <input required name="header" placeholder="Discussion Header" />
        </div>
        <div style="margin-top:5%; font-family:inter; flex-direction:column; height:250px;" class="single-input-container">
        <label style="margin-bottom: 2%;" for="text">Write your Discussion text:</label>
          <textarea style="font-family:inter;" name="text" cols="110" rows="30"></textarea>
          <!-- <input style="margin-top:2%; required name="text" type="text" placeholder="Discussion Text" /> -->

        </div>
        <div style="margin-top: 5%" class="single-input-container">
        <select required name="type" placeholder="gender">
            <option value="" disabled selected>Select your type</option>
            <option value="Patch">Patch</option>
            <option value="News">News</option>
            <option value="Champs">Champs</option>
            <option value="General">General</option>
        </select>
        </div>

        <?php
        echo "
        <input name='user' value=$user[UserID] hidden />
        ";
        ?>
        <div style="margin-top: 2%" class="button-container">
          <input type="submit" name="createDisc" value="Create Discussion" />
        </div>
      </form>
      <?php include_once '../controller/newDiscussionController.php'; ?>

    </div>

    

  </body>
</html>
