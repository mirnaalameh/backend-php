
<?php

include("connection.php");

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

$mysql = $connection->prepare("INSERT INTO users(email, password) VALUES (?,?)");
$mysql->bind_param("ss", $email, $password);
$mysql->execute();

$mysql->close();
$connection->close();
header("Location:indexsignin.php");

?>