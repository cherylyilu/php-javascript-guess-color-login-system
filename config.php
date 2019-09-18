<?php
define('DB_SERVER', 'fdb24.awardspace.net');
define('DB_USERNAME', '3028525_yilu');
define('DB_PASSWORD', '201341086ly');
define('DB_NAME', '3028525_yilu');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
