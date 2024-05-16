<?php
session_start();

if (isset($_SESSION['username'])) {
    $adminName = lcfirst($_SESSION['username']); // Using a clear and consistent variable name

    require 'db.php';

    // Prepare the SQL statement with the correct column name
    $query = "INSERT INTO `user_logs` (admin_name, status, datetime) VALUES (?, 'OUT', NOW())";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $adminName); // Bind the correct variable
    $stmt->execute();
    $stmt->close();
    $conn->close();

    session_destroy();
}

header("Location: index.php");
exit();
