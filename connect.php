<?php 
$conn = mysqli_connect("db", "root", "root", "firstdb");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>
