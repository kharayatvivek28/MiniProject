<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table View</title>
    <link rel="icon" type="image/x-icon" href="Image/logo_icon.jpeg">
    <link rel="stylesheet" href="CSS/table_view.css"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">Table View</h1>

            <!-- PHP file for the connection and displaying table data -->
            <?php
            session_start();
            // Check if user is logged in
            if (!isset($_SESSION['username'])) {
                header("Location: index.php");
                exit;
            }

            // Database connection
            $host = 'localhost';
            $db = 'user_authentication';
            $user = 'root';
            $pass = '';

            $conn = new mysqli($host, $user, $pass, $db);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get the table name from the GET request
            $viewtable = isset($_GET['button']) ? $_GET['button'] : '';
            $sqlquery = "SELECT * FROM $viewtable";
            $sqlcolumns = "SHOW COLUMNS FROM $viewtable";

            // Initialize columns array
            $columns = array();

            // Execute queries
            $result = $conn->query($sqlquery) or die($conn->error);
            $result_columns = $conn->query($sqlcolumns) or die($conn->error);
            ?>

            <h2 class="text-center">Table Name: <?php echo htmlspecialchars($viewtable); ?></h2>

            <div class="table-wrapper">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <?php
                            // Fetch and display column names
                            while ($row = $result_columns->fetch_assoc()) {
                                echo "<th>" . htmlspecialchars($row['Field']) . "</th>";
                                array_push($columns, $row['Field']);
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch and display the data
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            foreach ($columns as $val) {
                                echo "<td>" . htmlspecialchars($row[$val]) . "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Back to dashboard -->
            <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a> 
        </div>
    </div>

    <?php
    // Close the database connection
    $conn->close();
    ?>
    <script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        "pageLength": 10,
        "lengthChange": false
    });
});
</script>
</body>
</html>
