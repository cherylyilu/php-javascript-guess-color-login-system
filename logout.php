<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION['views']);
$_SESSION["flash"]="Logout successful";
header("Location: index.php");
?>
