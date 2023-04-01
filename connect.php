<?php
$server = "localhost";
$username="root";
$password = "";
$database = "mess";

$conn = mysqli_connect($server , $username , $password , $database);

if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}

?>