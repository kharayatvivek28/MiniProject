
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

	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$Email_ID = $_POST['email'];
    $Designation = $_POST['designation'];
    $Salary = $_POST['salary'];
    $Date_of_Joining = $_POST['dateofjoining'];
	$Date_of_Birth = $_POST['dob'];
    $Gender = $_POST['gender'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $State = $_POST['state'];
    $PIN = $_POST['pincode'];

    


	$result = $conn->query("INSERT into employee (first_name, last_name, EmailID, designation, Salary, dateofjoining, DOB, Gender, Address, City, State, pincode) 
    VALUES ( '$first_name', '$last_name','$Email_ID', '$Designation','$Salary', '$Date_of_Joining', '$Date_of_Birth', '$Gender', '$Address', '$City', '$State', '$PIN')");

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