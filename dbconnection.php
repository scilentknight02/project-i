<?php
$host="localhost";
$username="root";
$password="root";
$db = "cardiocrush";
$conn=mysqli_connect($host, $username, $password, $db);
if(!$conn){
    die("ERROR: Server does not connected due to".mysqli_connect_error());
}

?>