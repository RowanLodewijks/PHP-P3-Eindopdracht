<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$dbname = "p3/php";

// INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES (NULL, 'Admins', 'qbhWnACxuGgm95uTc1pM', 'Admins'), (NULL, 'Roeland', 'Roeland', 'Roeland');

// Admins
// qbhWnACxuGgm95uTc1pM

$conn = mysqli_connect($sname, $unmae, $password, $dbname);
// $conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
	echo "Connection failed!";
}

// if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
// }

?>