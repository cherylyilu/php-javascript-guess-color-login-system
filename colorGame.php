<?php session_start();?>
<?php 
        if(!isset($_SESSION['name'])&($_SESSION['views']>9)){
header('Location: user.php');}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Color Game </title>
	<link rel="stylesheet" type="text/css" href="colorGame.css">
</head>
<body>


<h1>
	<span id="colorDisplay"></span> 
</h1>

<div id="stripe">
	<button id="home">Main Page</button>
	<button id="reset">New Colors</button>
	<span id="message"></span>
	<button class="mode">Easy</button>
	<button class="mode">Medium</button>
	<button class="mode">Hard</button>
</div>

	<div id="container">
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
	</div>

<script type="text/javascript" src="colorGame.js"></script>
</body>
</html>