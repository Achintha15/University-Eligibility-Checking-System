<?php
	include_once '../includes/dbh.inc.php';
echo "conected";
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

if($username && $email && $password && confirmpassword){

if($password==$confirmpassword){

mysql_connect("localhost","root","") or die("we coulldn't connect!");
mysql_select_db("uecs");

$username=mysql_query("SELECT name FROM users WHERE username='$username'");
$count=mysql_num_rows($username);

if($count!=0){
include("links.php");
die("<b>ERROR:Name already exists!please try another");

}
mysql_query("INSERT INTO users(username,email,password,confirmpassword) VALUES ('$username','$email','$password','$confirmpassword')");
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


mysql_close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
