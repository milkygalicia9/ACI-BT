<?php

header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "Alabastro_8";
$dbname = "acibt_db";

// Check if the month parameter is provided
$month = isset($_GET['month']) ? $_GET['month'] : null;

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define certificate names
$certificates = [
    "Barangay Clearance",
    "Business Permit New",
    "Business Permit Renew",
    "Certificate of Income",
    "Cohabitation",
    "Certificate of Employability",
    "Indigency",
    "Indigency AICS",
    "Complaint Certificate",
    "Death Certificate",
    "First Time Job Seeker",
    "Lot Ownership",
    "Transfer of Residency",
];

$data = [];

if ($month === 'all') {
    // Fetch and return data for all certificates without month filtering
    foreach ($certificates as $cert) {
        $table_name = strtolower(str_replace(" ", "_", $cert));  // Assuming table names are like "barangay_clearance"
        $sql = "SELECT COUNT(*) AS count FROM $table_name"; // No WHERE clause for all data
        $stmt = $conn->prepare($sql);

        // Check if the statement preparation was successful
        if ($stmt === false) {
            echo json_encode(["error" => "Query preparation failed for table '$table_name': " . $conn->error]);
            exit();
        }

        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $data[$cert] = $result['count'];
    }
} else {
    // Handle specific month filtering
    $month = (int) $month; // Cast to integer for safety
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
}

// Return data as JSON
echo json_encode($data);

$conn->close();
?>