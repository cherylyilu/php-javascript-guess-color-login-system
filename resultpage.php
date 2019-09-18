<?php session_start();?>

<?php $color = $_REQUEST['color'];


?>


<?php if(isset($_SESSION['views'])& !isset($_SESSION['name'])){
 $_SESSION['views']=$_SESSION['views']+1;}
 else{$_SESSION['views']=1;
        } 
        
        if($_SESSION['views']>9){
header('Location: user.php');}
?>

<!DOCTYPE html>
<html>

<head>
	<title> resultpage </title>
	 <link rel="stylesheet" type="text/css" href="startPage.css">
         <style>
         body {background: <?= $color?>;}
         .button {
  background-color: pink;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 20px;
  cursor: pointer;
  
}
         </style>

</head>

<body>
<div class="descript">

<h1> Congratulations!</h1>
<?php if(isset($_SESSION['name'])){
        print("welcome back, ".$_SESSION['name']);
        }
      else{
        print("You have played ".$_SESSION['views']." times.<br>");
        print("We offer total 10 times for our guest. you can login or register here.");
        }
?>
<br>
<button class="button" onclick="myfun2();" ><span>Log in/Log out</span></button>
<br>
<button class="button" onclick="myfun();" ><span>Play Again! </span></button>

</div>
</body>
</html>

<script>

function myfun(){
location.replace("colorGame.php")
}

function myfun2(){
location.replace("user.php")
}


window.onload=function(){
	var str = location.search;
	var color ;
	if(str.indexOf("?") != -1){
		color = unescape(str.split("=")[1]);
	}

var pageColor = document.getElementById("pageColor");
pageColor.style.backgroundColor=color;

}


function getCookie(){

}




</script>

