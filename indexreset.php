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
<div">
    <form action="login.php" method="post" enctype="multipart/form-data">
		<h2>Reset Password</h2>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
			<input type="tel" id="phone" name="phone" placeholder="Phone Number" required><br><br>
        </div>
		<div class="form-group">
            <button type="reset" name="reset" class="btn btn-success btn-lg btn-block">Reset</button>
        </div>
    </form>
</div>
</body>
</html>