<?php
$con =mysqli_connect("localhost","root","","rgi_student");
if(!$con){
	echo "failed to connect to mysql:".mysqli_connect_error();
}
?>