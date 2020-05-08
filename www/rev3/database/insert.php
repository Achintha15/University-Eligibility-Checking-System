<?php
	include_once '../includes/dbh.inc.php';

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

if($username && $email && $password && $confirmpassword){

if($password==$confirmpassword){
//mysqli_connect('localhost','root','','loginsystem') or die("we couldn't connect!");
//mysqli_select_db("testsite");



mysqli_query($conn,"INSERT INTO users (username,email,password,confirmpassword) VALUES ('$username','$email','$password','$confirmpassword');");
//$user=mysqli_query($conn,"SELECT name FROM users WHERE username=$username");
$count=mysqli_num_rows(SELECT * FROM users WHERE username=$username);

if($count!=0){
include("links.php");
die("<b>ERROR:Name already exists!please try another");

}
mysqli_query("INSERT INTO users(username,email,password,confirmpassword) VALUES ('$username','$email','$password','$confirmpassword')");
$registered= mysql_affected_rows();
echo "$registered was inserted!";


echo "You have successfully registered!";
}
else{
echo "Your passwords did not match!";
}

}else{
echo "You have to complete the form!";
}
include("links.php");


mysqli_close();

header("Location: signin.html?submit=success");