<?php
include ('auth_session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    	
    <div class="form">
	    <div class="nav">
		<a href="welcome.php">Home</a>
		<a href="fees.php">fees</a>
		<a href="attendance.php">attendance</a>
		<a href="results.php">result</a>
		<a href="logout.php">Logout</a>
		</div>
        <h1>WELCOME</h1><br>
        <?php echo $_SESSION['username']; ?><br>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>