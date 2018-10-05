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
		echo "fill your name and email first";
	}
	else
{
	$result = mysqli_query($connect,"SELECT * FROM reg where email='$email'");
	$row = mysqli_fetch_array($result);
	$fid = $row['name'];
	$femail = $row['email'];
	if($fid == $uname && $femail  == $email)
	{
		echo "\nlogged in";
		//$_SESSION['sid']=$_POST['name'];
		//header('location:HomePage.php');
	}
	else
	{
		echo "\ninvalid id or pass";
	}
}
}
?>

