
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

	$ISBN = $_POST['isbn'];
    $Name = $_POST['name'];
	$Author = $_POST['author'];
    $Edition = $_POST['edition'];
    $Type = $_POST['type'];
    $Genre = $_POST['genre'];
	$Binding_Type = $_POST['binding_type'];
    $Buying_Price = $_POST['buying_price'];
    


	$result = $conn->query("INSERT into books (isbn, name, author, edition, type, genre, binding_type, buying_price) VALUES ('$ISBN', '$Name', '$Author', '$Edition', '$Type', '$Genre', '$Binding_Type', '$Buying_Price')");

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