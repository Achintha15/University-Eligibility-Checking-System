<?php

include_once '../includes/dbh.inc.php';

session_start();

mysqli_select_db($conn,'users');


$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];



$s = "SELECT * FROM users WHERE username = '$name' && password = '$password'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
	header("Location: ../index.php?");

}else{
	//header("Location: ../login/signin.html?invalid_user");
echo'<script language="javascript">
window.alert("Invalid User")
window.location.href = "../login/signin.html"
</script>';
exit();

}