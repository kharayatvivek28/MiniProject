<?php
$host = 'localhost';
$db = 'user_authentication';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement to avoid SQL Injection
        $stmt = $conn->prepare("INSERT INTO users (username, first_name, last_name, email, age, phone, gender, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssisss", $username, $firstname, $lastname, $email, $age, $phone, $gender, $hashed_password);

        // $stmt->execute() function in the context of a prepared statement is used to execute the SQL query that you've prepared.
        if ($stmt->execute()) {
            echo "<script>
                    let message = 'Registration Successfully Done\\nUser Added\\nYou can log in with your registered username and password.';
                    alert(message);
                    window.location = 'index.php'; // Redirect to login page
                  </script>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }
        $stmt->close();
        
    } else {
        echo "<p>Passwords do not match.</p>";
    }
}
$conn->close();
?>
