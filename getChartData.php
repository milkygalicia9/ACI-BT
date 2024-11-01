<?php

header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "Alabastro_8";
$dbname = "acibt_db";

$month = isset($_GET['month']) ? (int) $_GET['month'] : 0;

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$certificates = [
    "Barangay Clearance",
    "Business Permit New",
    "Business Permit Renew",
    "Certificate of Employability",
    "Certificate of Income",
    "Cohabitation",
    "Complaint Certificate",
    "Indigency",
    "Indigency AICS",
    "Lot Ownership",
    "Transfer of Residency",
];

$data = [];

foreach ($certificates as $cert) {
    $table_name = strtolower(str_replace(" ", "_", $cert));  // Assuming table names are like "barangay_clearance"
    $sql = "SELECT COUNT(*) AS count FROM $table_name WHERE MONTH(issued_date) = ?";
    $stmt = $conn->prepare($sql);

    // Check if the statement preparation was successful
    if ($stmt === false) {
        echo json_encode(["error" => "Query preparation failed for table '$table_name': " . $conn->error]);
        exit();
    }

    $stmt->bind_param("i", $month);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $data[$cert] = $result['count'];
}

echo json_encode($data);

$conn->close();
?>