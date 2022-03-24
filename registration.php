<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<?php
require('db.php');

if(isset($_REQUEST['username'])){
	$username =$_REQUEST['username'];
	$username = mysqli_real_escape_string($con, $username);
	$password =$_REQUEST['password'];
	$password = mysqli_real_escape_string($con, $password);
	$firstname =$_REQUEST['firstname'];
	$firstname = mysqli_real_escape_string($con, $firstname);
	$surname =$_REQUEST['surname'];
	$surname = mysqli_real_escape_string($con, $surname);
	$email =$_REQUEST['email'];
	$email = mysqli_real_escape_string($con, $email);
	$qualification =$_REQUEST['qualification'];
	$cellnumber =$_REQUEST['cellnumber'];
	$gender =$_REQUEST['gender'];
	$nationality =$_REQUEST['nationality'];
	$query = "INSERT into student_reg(username,password,firstname,surname,email,qualification,cellnumber,gender,nationality)
	VALUES ('$username','$password','$firstname','$surname','$email','$qualification','$cellnumber','$gender','$nationality')";
	$result=mysqli_query($con,$query);
	if($result){
		echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
	}
	else{
		echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
	}
}else{
?>
<form class="form" action="" method="post">
        <h1>REGISTRATION</h1><br><br>
        <input type="text" name="username" placeholder="Username" required ><br><br>
        <input type="password" name="password" placeholder="password" required><br><br>
        <input type="text" name="firstname" placeholder="First Name" required><br><br>
		<input type="text"  name="surname" placeholder="Surname" required><br><br>
		<input type="email" name="email" placeholder="EMAIL address" required><br><br>
		
		</label>
		<input type="number" name="cellnumber" placeholder="cellnumber" required><br><br>
		<label for="qualifications"  >Qualification:
		<select name="qualification" >
		<option>BSC.IT</option>
		<option>D.IT</option>
		<option>H.IT</option>
		</select><br><br>
		<label for="gender" >Gender:
		<input type="radio" name="gender" value ="Male">Male
		<input type="radio" name="gender" value ="Female">Female
		</label><br><br>
		<label for="nationality" >Nationality:
		<select name="nationality" required>
		<option>South African</option>
		<option>Indian</option>
		<option>Other</option>
		</select><br><br>
        <input type="submit" name="submit" value="Register" class="nav-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
</form>
<?php
}
?>
</body>
</html>