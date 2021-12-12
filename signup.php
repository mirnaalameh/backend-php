<?php

include("connection.php");

if(isset($_POST["username"]) && $_POST["username"] != ""){
	$name = $_POST["username"];
}else{
	die("Don't try to mess around bro ;)");
}

if(isset($_POST["email"]) && $_POST["email"] != ""){
	$email = $_POST["email"];
}else{
	die("Don't try to mess around bro ;)");
}


if(isset($_POST["password"]) && $_POST["password"] != ""){
	$password = hash("sha256", $_POST["password"]);
}else{
	die("Don't try to mess around bro ;)");
}


$mysql = $connection->prepare("INSERT INTO users(username, email, password) VALUES (?,?,?)");
$mysql->bind_param("sss", $name, $email, $password);
$mysql->execute();

$mysql->close();
$connection->close();
header("Location:index.php");

?>