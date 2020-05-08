<?php
	include_once 'dbh.inc.php';

$first = $_POST['first-name'];
$last = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$idno = $_POST['idno'];
$district = $_POST['district'];
$stream = $_POST['stream'];
$zscore = $_POST['zscore'];







$sql = "INSERT INTO students (firstname,lastname,email,phone,idno,district,stream,zscore) VALUES ('$first','$last','$email','$phone','$idno','$district','$stream','$zscore');";
mysqli_query($conn,$sql);

echo'<script language="javascript">
window.alert("Your information has been recorded")
window.location.href = "../index.php"
</script>';
exit();