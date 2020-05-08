<?php

include_once '../includes/dbh.inc.php';

session_start();

mysqli_select_db($conn,'users');


$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


$s = "SELECT * FROM users WHERE username = '$name'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if (!($password==$confirmpassword)) {

	//header("location: ../login/signup.html?incorrect_confirmpassword");
	echo "incorrect_confirmpassword";
				echo'<script language="javascript">
						window.alert("Your confirm password is incorect")
						window.location.href = "../login/signup.html"
						</script>';
						exit();
}else{
if ($num == 1) {

				echo'<script language="javascript">
						window.alert("The username is already taken")
						window.location.href = "../login/signup.html"
						</script>';
						exit();

}else{
	$reg = "INSERT INTO users(username, email, password, confirmpassword) VALUES ('$name', '$email', '$password', '$confirmpassword')";
	mysqli_query($conn, $reg);
	echo "Sign Up successful"; 
	header("Location: ../login/signin.html?submit=success");
}
}