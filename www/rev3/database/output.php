<?php
mysql_connect("localhost","root","") or die("Problem with connection!");

mysql_select_db("testsite");

$result=mysql_query("SELECT * FROM users");

while($row=mysql_fetch_array($result)){
echo $row['username']." ".$row['email']." ".$row['password']." ".$row['confirmpassword '];
echo "</br>";


}
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
