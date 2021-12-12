<?php

include("connection.php");

$query = "SELECT * FROM users ORDER BY id DESC";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div  class="signup-form">
    <form action="login.php" method="post" enctype="multipart/form-data">
		<h2>LOG IN</h2>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Sign In</button>
        </div>
		<div class="text-center">Forgot Password? <a href="indexreset.php">Click Here</a></div>
        <div class="text-center">Don't have an account? <a href="index.php">Sign up Here</a></div>
    </form>
</div>
</body>
</html>