
<?php

session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$host = 'localhost';
$db = 'user_authentication';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $Publisher_Name = $_POST['publishername'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $State = $_POST['state'];
    $PIN = $_POST['pincode'];
    

	$result = $conn->query("INSERT into publisher ( Publisher_Name, Address, City, State, pincode) VALUES ('$Publisher_Name', '$Address','$City','$State','$PIN')");

	if ($result)
	{
		echo "<script>alert('Sucessfully added.');
				window.location = 'dashboard.php';</script>";
	}
	else
	{
		echo "<script>alert('Failed.');
				window.location = 'dashboard.php';</script>";
	}
	
  $conn->close();
?>