<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'database-1.cas91p4x14yt.ap-south-1.rds.amazonaws.com');
define('DB_USERNAME', 'mca');
define('DB_PASSWORD', '1si21mc046');
define('DB_NAME', 'employees_db1');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
