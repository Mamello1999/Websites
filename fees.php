<?php
include ('auth_session.php');
include ('db.php');

$query="SELECT * FROM student_reg,student_info";
$result=mysqli_query($con,$query);
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
		<h1>STUDENT FEES</h1><br>
		<table align="center" border=1px; style="width:200px; line-height:25px;">
		<th>StudentID</th>
		<th>Student Name</th>
		<th>Balance</th>
		<th>Due-date</th>
		<?php
		while($rows=mysqli_fetch_assoc($result)){
		?>
		<tr>
		<td><?php echo $rows['st_id'];?></td>
		<td><?php echo $rows['firstname'];?></td>
		<td><?php echo $rows['std_balance'];?></td>
		<td><?php echo $rows['due_date'];?></td>
		</tr>
		<?php
		}
		?>
		</table>
    </div>
</body>