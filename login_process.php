<?php
require 'db.php';

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `admin` WHERE username=? AND password=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;

    if ($count == 1) {
        $_SESSION['username'] = ucfirst($username);

        $query = "INSERT INTO `user_logs` (admin_name, status, datetime) VALUES (?, 'IN', NOW())";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();

        header("Location: home.php");
        exit();
    } else {
        echo "Invalid Login Credentials.";
    }

    $stmt->close();
}
$conn->close();
