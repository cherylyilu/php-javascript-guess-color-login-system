<?php session_start();?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login to our game</title>
    <link href="startPage.css" type="text/css" rel="stylesheet" />
  </head>
  <style>
  .button {
  border-radius: 30px;
  background-color: #FF69B4;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
  <body>
    <h1>Color Guess Game</h1>
    <h2>Welcome! Please login to play.</h2>
    <?php if($_SESSION['views']>9) {
    
        alert("You already played 10 times. Please login or register to continue the game!");}?>
        <?php 
        function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
 
    <ul id="navigation">
      <li><a href="index.php">Main Page</a></li>
      <li><a href="colorGame.php">Play Now</a></li>
      <li><a href="user.php">Log In/Out</a></li>
    </ul>
    
<div class="login">
<?php if (isset($_SESSION["name"])) { ?>

  <h2>User Status</h2>
  <p>You are logged in as <?= $_SESSION["name"] ?>.</p>
  
  <form id="logout" action="logout.php" method="post">
    <input type="submit" value="Log out" />
    <input type="hidden" name="logout" value="true" />
  </form>
<?php } else { ?>
  <h2>Welcome Back! Please Log in</h2>
  <form id="login" action="login.php" method="post">
      Username: <input type="text" name="name" /> Password: <input type="password" name="password" /> <input type="submit" value="Log in" />
  </form>
              <p>New customer? Register Here!<a href="register.php" class="button">Register</a></p>
</div>

  <?php } ?>
        <div class="footer">
            &copy;  Made by Yiwen Zheng and Yi Lu        </div>

  </body>
</html>
