<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
  <title> Index Page </title> 
  <link rel="stylesheet" type="text/css" href="startPage.css">

</head>

<body>

  <div class="image">
    <img src="cute.gif">
  </div>

  <div class="descript">
    <h1>Guess Color Game</h1>
    <h2>Welcome!</h2>
    <b>Game Instruction:</b><br>
    Based on the RGB value provided (three numbers), select the color<br>you think is being matched.
    What's RGB?   Visit <a href="https://en.wikipedia.org/wiki/RGB_color_model" target="_blank">Wikipedia</a> to learn more.<br>

    <ul id="navigation">
      <li><a href="colorGame.php">Play Now</a></li>
      <li><a href="user.php">Log In/Out</a></li><br>
      <br>
      <li>&copy;  Made by Yiwen Zheng and Yi Lu</li>
    </ul>
    <br>
  </div>
    <?php
    if (isset($_SESSION["flash"])) { 
		echo '<script type="text/javascript">alert ("'.$_SESSION["flash"].'");</script>';
		unset($_SESSION["flash"]);
	}
    ?>


  </body>
</html>