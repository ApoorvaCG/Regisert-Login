<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";

$connect = new mysqli($servername, $username, $password, $db);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";


$uname = $_POST['lname'];
$email = $_POST['lemail'];
$submit = $_POST['signin'];

if(isset($submit))
{
	if($uname =="" || $email =="")	
	{
		echo "please fill in your name and email";
	}
	else
{
	$result = mysqli_query($connect,"SELECT * FROM reg where email='$email'");// 'reg'- register table name in db
	$row = mysqli_fetch_array($result);
	$fid = $row['name'];
	$femail = $row['email'];
	//check login details
	if($fid == $uname && $femail  == $email)
	{
		echo "\nLogin successfull";
	}
	else
	{
		echo "\nLogin unsuccessfull, Invalid uesr name or email";
	}
}
}
?>

