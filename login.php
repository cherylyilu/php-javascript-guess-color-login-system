<?php session_start();?>
<?php
if (isset($_REQUEST["name"]) && isset($_REQUEST["password"])) {

	$name = $_REQUEST["name"];
	$password = $_REQUEST["password"];
        
	$con=mysqli_connect("fdb24.awardspace.net","3028525_yilu","201341086ly","3028525_yilu");
	$name=$_REQUEST["name"];
	$sql="SELECT * FROM `users` WHERE `username` = '$name'";
	$results=mysqli_query($con, $sql);
        
	$_SESSION["flash"]="Login failed";
	if(mysqli_num_rows($results)>0){
		$row=mysqli_fetch_array($results);
		$correct_password=$row["password"];
		if($correct_password==$password){
			$_SESSION["name"] = $name; 
			$_SESSION["flash"]="Login successful";
		}
	}	
}

header("Location: index.php");
?>
