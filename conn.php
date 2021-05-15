<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank website";

/*$conn = mysqli_connect($servername,$username,$password,$dbname);*/
$conn = mysqli_connect("localhost","nandani","nandani123","bank website");

if (!$conn) {
    die("Couldn't connect to the Database" . mysqli_connect_error());
}

?>