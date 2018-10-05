<?php
//mySQL connection- mysql_connect(host, username, password, dbname);
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";

$connect = new mysqli($servername, $username, $password, $db);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";

$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['submit'];

if(isset($sub)){
	
	$query = mysqli_query($connect,"INSERT INTO reg(name, email) VALUES('$name', '$email')");
}
if (mysqli_query($connect, $query)) {
      echo "New record created successfully";
}
//mysql-close
//mysql_close($connect);
?>