<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Store Management - Admin Dashboard</title>
  <link rel="stylesheet" href="CSS/dashboard.css">
  <link rel="icon" type="image/x-icon" href="Image/logo_icon.jpeg">
</head>
<body>
<div class="container">
    <header>
        <div class="image_container"> <img src="Image/book-shop-icon.jpg" alt="dashboardlogo"></div>
        <div class="title">
            <h1>Book Store Management</h1>
            <div class="subtitle">Admin Dashboard</div>
        </div>
        <a href="logout.php"><button class="logout">Logout</button></a>
    </header>
    <div class="content">
        <div class="column">
            <h2>Insert Data</h2>
            <ul>
                <li onclick="location.href='customer_add.php';">Add Customer</li>
                <li onclick="location.href='employee_add.php';">Add Employee</li>
                <li onclick="location.href='book_add.php';">Add Book</li>
                <li onclick="location.href='seller_add.php';">Add Seller</li>
                <li onclick="location.href='publisher_add.php';">Add Publisher</li>
            </ul>
        </div>
        <div class="column">
            <h2>View Data</h2>
            <ul>
                <a href="view.php?button=customer" ><li>View Customer</li></a>
                <a href="view.php?button=employee" ><li>View Employee</li></a>
                <a href="view.php?button=books" ><li>View Books</li></a>
                <a href="view.php?button=seller" ><li>View Seller</li></a>
                <a href="view.php?button=publisher" ><li>View Publisher</li></a>
             
            </ul>
        </div>
    </div>
</div>

</body>
</html>
