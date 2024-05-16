<?php
    session_start();

    $username = $_SESSION['username'];

    require 'db.php';

    $query = "INSERT INTO `user_logs` (admin_name, status, datetime) VALUES (?, 'OUT', NOW())";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    session_destroy();
    header("Location: index.php");