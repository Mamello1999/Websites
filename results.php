<?php
include ('auth_session.php');
include ('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Results</title>
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
		<h1>RESULTS</h1><br>
		<table align="center" border=1px; style="width:200px; line-height:25px;">
		<tr>
		<th>STUDENT ID</th>
		<th>Student Name</th>
		<th>PROG622</th>
		<th>IP622</th>
		<th>CC512</th>
		<th>IS622</th>
		<th>BigData600</th>
		<?php
		$query="SELECT * FROM student_reg,student_res";
		$result=mysqli_query($con,$query);
		while($rows=mysqli_fetch_assoc($result)){
		?>
		</tr>
		<td><?php echo $rows['st_id']?></td>
		<td><?php echo $rows['firstname']?></td>
		<td><?php echo $rows['Programming']?></td>
		<td><?php echo $rows['InternetProgramming']?></td>
		<td><?php echo $rows['CloudComputing']?></td>
		<td><?php echo $rows['InformationSystems']?></td>
		<td><?php echo $rows['BigData']?></td>
		<?php
		}
		?>
    </div>
	<a href="mailto:resultsdepartment@richfield.ac.za?subject=requestResult&body=results">RUQUEST RESULTS</a><br><br>
</body>