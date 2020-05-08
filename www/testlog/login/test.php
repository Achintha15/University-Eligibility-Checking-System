<?php

	<?php
	include_once 'dbh.inc.php';

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$confirmpassword = $_POST['confirmpassword'];








$sql = "INSERT INTO users (username,email,pass,confirmpassword) VALUES ('$username','$email','$pass','$confirmpassword');";
mysqli_query($conn,$sql);



?>