<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}

require 'db.php';

$doc_name = strtolower($_GET['doc_name']);
$client_trans_id = $_GET['client_trans_id'];

if ($doc_name == 'barangay_clearance') {
    $sql = "SELECT * FROM $doc_name WHERE id = $client_trans_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
    $address = $row['address'];
    $birthplace = $row['birthplace'];
    $birthdate = $row['birthdate'];
    $civil_status = $row['civil_status'];
    $period_of_residency = $row['period_of_residency'];
    $purpose = $row['purpose'];
}
