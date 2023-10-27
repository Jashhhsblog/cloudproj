<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection configuration
    $servername = 'localhost';
    $dbname = 'userdetails';
    $dbusername = 'root';
    $dbpassword = '';

    // Create a connection to the database
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check if the connection is successful
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare the SQL statement to retrieve the user's password from the database
    $sql = "SELECT Password FROM users WHERE Username='$username'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // User exists in the database
        $row = $result->fetch_assoc();
        $storedPassword = $row['Password'];

        // Compare the stored password with the entered password
        if ($password == $storedPassword) {
            echo "<script> alert('Correct Password'); window.location.href = '../pages/home.php'; </script>";
        } else {
            echo "<script> alert('Incorrect Password'); window.location.href = 'index.html'; </script>";
        }
    } else {
        echo "<script> alert('User not found'); window.location.href = 'index.html'; </script>";
    }

    // Close the database connection
    $con->close();
}
?>


